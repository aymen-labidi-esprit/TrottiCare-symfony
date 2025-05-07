<?php
// src/Service/FacialRecognitionService.php
namespace App\Service;

use Symfony\Component\HttpClient\HttpClient; // Example if calling an external API
use Symfony\Contracts\HttpClient\HttpClientInterface; // Interface for HttpClient

class FacialRecognitionService
{
    private const EUCLIDEAN_THRESHOLD = 0.43; // Adjust as needed
    private HttpClientInterface $httpClient;
    private string $faceApiEndpoint; // URL of your Python API/service

    // Inject HttpClient and potentially the API endpoint URL
    public function __construct(HttpClientInterface $httpClient, string $faceApiEndpoint = 'http://127.0.0.1:5001/extract') // Example endpoint
    {
        $this->httpClient = $httpClient;
        $this->faceApiEndpoint = $faceApiEndpoint;
    }

    /**
     * Extracts embedding by calling an external service (e.g., Python Flask API).
     *
     * @param string $base64ImageData Base64 encoded image string (with prefix like data:image/jpeg;base64,)
     * @return string|null Comma-separated float string representing the embedding, or null on failure.
     */
    public function extractEmbedding(string $base64ImageData): ?string
    {
        // Remove the base64 prefix (e.g., "data:image/jpeg;base64,")
        $base64CleanData = preg_replace('#^data:image/\w+;base64,#i', '', $base64ImageData);
        if (empty($base64CleanData)) {
            error_log("Face Embedding Extraction Error: Invalid base64 prefix or empty data.");
            return null;
        }

        try {
            $response = $this->httpClient->request('POST', $this->faceApiEndpoint, [
                'json' => ['image_base64' => $base64CleanData]
                // Or use 'body' => json_encode(...) depending on API expectation
                // Add headers if needed: 'headers' => ['Content-Type' => 'application/json']
            ]);

            $statusCode = $response->getStatusCode();
            $content = $response->toArray(false); // false to not throw on non-2xx codes

            if ($statusCode === 200 && isset($content['embedding']) && is_array($content['embedding'])) {
                // API should return an array of floats/numbers
                // Ensure they are floats and join them into a string
                $embeddingArray = array_map('floatval', $content['embedding']);
                if (count($embeddingArray) === 128) { // Check expected dimension
                    return implode(',', $embeddingArray);
                } else {
                    error_log("Face Embedding Extraction Error: API returned embedding with incorrect dimension: " . count($embeddingArray));
                    return null;
                }
            } else {
                // Log the error from the API if available
                $errorMessage = $content['error'] ?? ('API Error: Status ' . $statusCode);
                error_log("Face Embedding Extraction Error: " . $errorMessage);
                return null;
            }

        } catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
            error_log("Face Embedding API Transport Error: " . $e->getMessage());
            return null; // Network or connection error
        } catch (\Symfony\Contracts\HttpClient\Exception\ExceptionInterface $e) {
            error_log("Face Embedding API Client/Server Error: " . $e->getMessage());
            return null; // Other client/server errors
        } catch (\JsonException $e) {
            error_log("Face Embedding API Response JSON Error: " . $e->getMessage());
            return null; // Could not decode JSON response
        } catch (\Exception $e) {
            error_log("Face Embedding Unknown Error: " . $e->getMessage());
            return null; // General error
        }
    }


    /**
     * Compares a submitted face descriptor string with a stored descriptor string.
     * Uses Euclidean distance.
     *
     * @param string $submittedDescriptorString Comma-separated descriptor floats.
     * @param string $storedDescriptorString Comma-separated descriptor floats.
     * @return bool True if faces match within threshold, false otherwise.
     */
    public function compareFaces(string $submittedDescriptorString, string $storedDescriptorString): bool
    {
        if (empty($submittedDescriptorString) || empty($storedDescriptorString)) {
            error_log("Comparison failed: Missing submitted or stored descriptor string.");
            return false;
        }

        try {
            $submittedEmbedding = array_map('floatval', explode(',', $submittedDescriptorString));
            $storedEmbedding = array_map('floatval', explode(',', $storedDescriptorString));

            if (count($submittedEmbedding) !== 128 || count($storedEmbedding) !== 128) {
                error_log("Comparison failed: Invalid descriptor length. Submitted: " . count($submittedEmbedding) . ", Stored: " . count($storedEmbedding));
                return false;
            }

            $distance = $this->euclideanDistance($submittedEmbedding, $storedEmbedding);
            error_log("Face comparison Euclidean distance: " . $distance);

            return $distance <= self::EUCLIDEAN_THRESHOLD;

        } catch (\Exception $e) {
            error_log("Facial recognition comparison error: " . $e->getMessage());
            return false;
        }
    }

    private function euclideanDistance(array $vecA, array $vecB): float
    {
        $sumOfSquares = 0.0;
        $count = count($vecA);

        for ($i = 0; $i < $count; $i++) {
            $diff = ($vecA[$i] ?? 0.0) - ($vecB[$i] ?? 0.0); // Handle potential missing keys just in case
            $sumOfSquares += $diff * $diff;
        }

        return sqrt($sumOfSquares);
    }
}