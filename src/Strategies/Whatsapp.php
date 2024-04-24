<?php

namespace Wappi\Client\Strategies;

use Illuminate\Support\Facades\Http;
use Wappi\Client\Interfaces\Strategy;

class Whatsapp implements Strategy
{
    private $phone;

    const API_OPT_URL = 'https://platform.heybot.me/api/v0.1/opt-in';

    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://platform.heybot.me/api/v0.1/messaging',
    ) {
    }

    /**
     * @param $salt
     * @return string
     */
    private function signature($salt)
    {
        $signature = hash_hmac('sha256', json_encode($salt), $this->apiKey, true);
        return base64_encode($signature);
    }

    /**
     * @param $phoneNumber
     * @return $this
     */
    public function phoneNumber($phoneNumber)
    {
        $this->phone = $phoneNumber;
        return $this;
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function markAsOptIn(): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'Wappi/0.0.1',
        ])->post(self::API_OPT_URL, [
            'phoneNumber' => $this->phone,
            'signature' => $this->signature($this->phone)
        ]);
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function request(array $data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'Wappi/0.0.1',
        ])->post($this->apiHost, [
            'phoneNumber' => $this->phone,
            'messages' => $data,
            'signature' => $this->signature($data)
        ]);
    }

    /**
     * @param array $data
     * @return \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
     */
    public function requestAsync($data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {
        return Http::withToken(
            $this->apiKey
        )->timeout(
            10
        )->withHeaders([
            'User-Agent' => 'Wappi/0.0.1',
        ])->async()->post($this->apiHost, [
            'phoneNumber' => $this->phone,
            'messages' => $data,
            'signature' => $this->signature($data)
        ]);
    }
}
