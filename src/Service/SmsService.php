<?php

namespace App\Service;

use Twilio\Rest\Client;
use Psr\Log\LoggerInterface;

class SmsService
{
    private $twilioClient;
    private $fromNumber;
    private $logger;

    public function __construct(string $twilioSid, string $twilioAuthToken, string $twilioFromNumber, LoggerInterface $logger)
    {
        $this->twilioClient = new Client($twilioSid, $twilioAuthToken);
        $this->fromNumber = $twilioFromNumber;
        $this->logger = $logger;
    }

    public function sendSms(string $to, string $message): bool
    {
        // Ensure the phone number starts with a "+"
        if (!str_starts_with($to, '+')) {
            $to = '+' . $to;
        }

        try {
            $this->twilioClient->messages->create($to, [
                'from' => $this->fromNumber,
                'body' => $message,
            ]);
            return true;
        } catch (\Exception $e) {
            $this->logger->error('Failed to send SMS: ' . $e->getMessage());
            return false;
        }
    }
}