<?php

namespace App\Service;

use Twilio\Rest\Client; // <--- CORRECT CLIENT
use Symfony\Component\Notifier\Message\SmsMessage;

class Texter
{
    private $twilioClient;
    private $twilioPhoneNumber;

    public function __construct(string $accountSid, string $authToken, string $phoneNumber)
    {
        $this->twilioClient = new Client($accountSid, $authToken);
        $this->twilioPhoneNumber = $phoneNumber;
    }

    public function send(SmsMessage $sms)
    {
        // Use the Twilio client to send the SMS
        $this->twilioClient->messages->create(
            "+21620692262", // recipient phone number
            [
                'from' => $this->twilioPhoneNumber, // Twilio phone number
                'body' => $sms->getSubject(),      // SMS message content
            ]
        );
    }
}
