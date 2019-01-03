<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/11/2018
 * Time: 7:21 PM
 */

namespace App\Network\HttpClients;

use App\Network\HttpClients\Interfaces\HttpClient;
use App\Network\Response\GuzzleResponse;
use App\Network\Response\ResponseInterface;
use GuzzleHttp\Client;

class GuzzleClient implements HttpClient
{

    private $client;

    /**
     * GuzzleClient constructor.
     * @param $baseUri
     * @param float $timeOut
     */
    public function __construct($baseUri, $timeOut = 100.0)
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $baseUri,
            // You can set any number of default request options.
            'timeout' => $timeOut,
        ]);
    }

    /**
     * @param $method
     * @param string $uri
     * @param array $options
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function request($method, $uri = '', array $options = []) : ResponseInterface
    {
        return new GuzzleResponse($this->client->request($method, $uri, $options));
    }
}