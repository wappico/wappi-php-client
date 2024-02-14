<?php

namespace Wappi\Client\Strategies;

use Illuminate\Support\Facades\Http;
use Wappi\Client\Interfaces\Strategy;

class Whatsapp implements Strategy
{
    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private string $apiKey = '',
        private string $apiHost = 'https://wappi.co/api/v1/whatsapp',
    ) {
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
        ])->post($this->apiHost, $data);
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
        ])->async()->post($this->apiHost, $data);
    }
}
