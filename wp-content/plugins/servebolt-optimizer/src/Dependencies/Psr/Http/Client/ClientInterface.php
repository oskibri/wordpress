<?php

namespace Servebolt\Optimizer\Dependencies\Psr\Http\Client;

use Servebolt\Optimizer\Dependencies\Psr\Http\Message\RequestInterface;
use Servebolt\Optimizer\Dependencies\Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Servebolt\Optimizer\Dependencies\Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}