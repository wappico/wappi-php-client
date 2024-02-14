<?php

namespace Wappi\Client\Interfaces;

/**
 * The Strategy interface declares operations common to all supported versions
 * of some algorithm.
 *
 * The Context uses this interface to call the algorithm defined by Concrete
 * Strategies.
 */
interface Strategy
{
    public function request(array $data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response;

    public function requestAsync($data): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response;
}