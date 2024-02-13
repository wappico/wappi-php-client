<?php

namespace Wappi\Client;

use GuzzleHttp\Client as Http;

class WappiClient
{
    /**
     * @var Http
     */
    private Http $http;

    /**
     * @var array
     */
    public array $messages = [];

    /**
     * @param string $apiKey
     * @param string $apiHost
     */
    public function __construct(
        private readonly string $apiKey = '',
        private readonly string $apiHost = 'https://wappi.co/api/v1',
    ) {
        $this->http = new Http([
            'base_uri' => $this->apiHost,
            'timeout'  => 10,
            'headers' => [
                'X-Foo' => 'Bar',
                'Authorization' => 'Bearer ' . $this->apiKey,
                'User-Agent' => 'WappiClient/0.0.1',
                'allow_redirects' => false,
            ]
        ]);
    }

    /**
     * @param $message
     * @return void
     */
    public function add($message)
    {
        $this->messages[] = $message;
    }

    /**
     * @param array $messages_list
     * @return void
     */
    public function addMany(array $messages_list)
    {
        $this->messages = array_merge($this->messages, $messages_list);
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send()
    {
        return $this->http->post( '/whatsapp',  ['json' => $this->messages]);
    }

    /**
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sendAsync()
    {
        return $this->http->postAsync('/whatsapp',  ['json' => $this->messages]);
    }
}