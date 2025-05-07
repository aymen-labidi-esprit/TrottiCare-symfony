<?php
// src/Validator/RecaptchaV2Validator.php
namespace App\Validator;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface; // Optional for logging

class RecaptchaV2Validator extends ConstraintValidator
{
    private RequestStack $requestStack;
    private HttpClientInterface $httpClient;
    private string $recaptchaSecretKey;
    private ?LoggerInterface $logger; // Optional

    // Inject necessary services and the secret key
    public function __construct(
        RequestStack $requestStack,
        HttpClientInterface $httpClient,
        string $recaptchaV2SecretKey, // Bind this in services.yaml or via env var directly
        ?LoggerInterface $logger = null // Optional logger
    ) {
        $this->requestStack = $requestStack;
        $this->httpClient = $httpClient;
        $this->recaptchaSecretKey = $recaptchaV2SecretKey;
        $this->logger = $logger;
    }

    public function validate(mixed $value, Constraint $constraint): void
    {
        if (!$constraint instanceof RecaptchaV2) {
            throw new UnexpectedTypeException($constraint, RecaptchaV2::class);
        }

        $request = $this->requestStack->getCurrentRequest();
        if (!$request) {
            // Cannot validate without a request context
            $this->logger?->warning('RecaptchaV2Validator: Request context not found.');
            // Optionally add violation, but likely means non-web context
            return;
        }

        // 'g-recaptcha-response' is the default name Google uses for the token
        $recaptchaResponse = $request->request->get('g-recaptcha-response');

        if (empty($recaptchaResponse)) {
            $this->context->buildViolation($constraint->message) // Use the main message
            ->addViolation();
            return;
        }

        if (!is_string($recaptchaResponse)) {
            $this->context->buildViolation($constraint->invalidInputMessage)
                ->addViolation();
            return;
        }

        try {
            $response = $this->httpClient->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => [
                    'secret' => $this->recaptchaSecretKey,
                    'response' => $recaptchaResponse,
                    'remoteip' => $request->getClientIp(),
                ],
            ]);

            $data = $response->toArray(); // Throws exceptions on client/server errors

            if (!isset($data['success']) || $data['success'] !== true) {
                $this->logger?->warning('reCAPTCHA verification failed.', ['response_data' => $data]);
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ error_codes }}', isset($data['error-codes']) ? implode(', ', $data['error-codes']) : 'N/A')
                    ->addViolation();
            }
            // If successful, do nothing (validation passes)

        } catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
            $this->logger?->error('reCAPTCHA transport error: '.$e->getMessage());
            $this->context->buildViolation('Erreur de communication avec le service reCAPTCHA.')
                ->addViolation();
        } catch (\Symfony\Contracts\HttpClient\Exception\ExceptionInterface $e) {
            $this->logger?->error('reCAPTCHA client/server error: '.$e->getMessage());
            $this->context->buildViolation('Erreur lors de la vérification reCAPTCHA.')
                ->addViolation();
        } catch (\Exception $e){ // Catch potential JSON errors etc.
            $this->logger?->error('reCAPTCHA generic error: '.$e->getMessage());
            $this->context->buildViolation('Une erreur inattendue est survenue lors de la vérification.')
                ->addViolation();
        }
    }
}