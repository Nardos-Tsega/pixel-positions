<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SendSmsService
{
    private string $baseUrl = 'https://api.afromessage.com/api';
    private string $token;
    private string $identifierId;
    private string $senderName;

    public function __construct()
    {
        $this->token = config('services.afromessage.token');
        $this->identifierId = config('services.afromessage.identifier_id');
        $this->senderName = config('services.afromessage.sender_name');
    }

    public function sendVerificationCode(string $phone)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->baseUrl . '/challenge', [
            'from' => $this->identifierId,
            // 'sender' => $this->senderName,
            'to' => '+251' . ltrim($phone, '0'),
            'pr' => 'Your TalentBridge verification code is:',
            'ttl' => 300, // 5 minutes
            'len' => 6,
            't' => 0
        ]);

        if ($response->successful() && $response->json('acknowledge') === 'success') {
            return $response->json('response');
        }

        throw new \Exception($response->json('response.errors.0', 'SMS sending failed'));
    }

    public function verifyCode(string $phone, string $verificationId, string $code)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->token
        ])->get($this->baseUrl . '/verify', [
            'to' => $phone,
            'vc' => $verificationId,
            'code' => $code
        ]);

        return $response->successful() &&
               $response->json('acknowledge') === 'success';
    }
}
