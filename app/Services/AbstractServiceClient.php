<?php

namespace App\Services;

/**
 * Abstract ServiceClient.
 */
abstract class AbstractServiceClient
{
    /**
     * Http Client instance.
     *
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param string      $baseUri the base service URI
     * @param string|null $secret  the authorization token
     *
     * @return void
     */
    public function __construct(string $baseUri, ?string $secret = null)
    {
        $headers = [];

        if ($secret) {
            $headers['Authorization'] = 'Basic '.base64_encode(':'.$secret);
        }

        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $baseUri,
            'headers' => $headers,
        ]);
    }

    /**
     * Makes a request.
     *
     * @param string $method  the HTTP method
     * @param string $url     the request URL
     * @param array  $options the options array (body, headers and so)
     *
     * @return string
     */
    public function request(string $method, string $url, array $options = [])
    {
        return $this
            ->client
            ->request($method, $url, $options)
            ->getBody()
            ->getContents();
    }
}
