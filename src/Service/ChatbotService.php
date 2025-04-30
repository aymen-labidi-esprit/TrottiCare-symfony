<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\JsonException;

class ChatbotService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->apiKey = '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'; // your real token
    }

    public function ask(string $message): string
{
    try {
        $response = $this->client->request('POST', 'https://api-inference.huggingface.co/models/facebook/blenderbot-400M-distill', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'inputs' => $message,
            ],
        ]);

        $data = $response->toArray(false);

        // Save response into var/ directory for debugging
        file_put_contents(__DIR__ . '/../../var/huggingface_response.json', json_encode($data, JSON_PRETTY_PRINT));

        if (isset($data['error'])) {
            return 'Bot Error: ' . $data['error'];
        }

        if (isset($data[0]['generated_text'])) {
            return $data[0]['generated_text'];
        }

        return 'Bot could not generate a valid response.';
    } catch (\Exception $e) {
        return 'Bot Error: ' . $e->getMessage();
    }
}

}
