<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/11/2018
 * Time: 8:09 PM
 */

namespace App\AutoDesk\Api;

use App\Network\HttpClients\Interfaces\HttpClient;
use App\ProjectFile;

class AutoDeskApi
{
    private $client;
    private $clientId;
    private $clientSecret;
    private $bucket;

    /**
     * BaseAutoDeskApi constructor.
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->client = $httpClient;
        $this->clientId = config('services.autodesk.clientId');
        $this->clientSecret = config('services.autodesk.clientSecret');
        $this->bucket = config('services.autodesk.bucket');
    }

    /**
     * @param $scope
     * @return \App\Network\Response\ResponseInterface
     */
    public function authenticate($scope)
    {
        return $this->client->request(HttpClient::POST_REQUEST, Constants::AUTH, [
            'form_params' => [
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'grant_type' => 'client_credentials',
                'scope' => $scope
            ]
        ]);
    }

    public function uploadFile($pathToFile, $accessToken, $filename)
    {
        $url = Constants::getFileUploadUrl($filename, $this->bucket);

        return $this->client->request(HttpClient::PUT_REQUEST, $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/octet-stream',
            ],
            'body' => fopen($pathToFile, 'r'),
        ]);
    }

    public function derivative($accessToken, $urn, $rootFileName, $type = 'svf', $views = ['3d', '2d'], $region = 'us')
    {
        return $this->client->request(HttpClient::POST_REQUEST, Constants::MODEL_DERIVATIVE, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type'  => "application/json",
            ],
            'json' => [
                "input" => [
                    "urn" => $urn,
                    "compressedUrn" => false,
                    "rootFilename" => $rootFileName,
                ],
                "output" => [
                    "destination" => [
                        "region" => $region
                    ],
                    "formats" => [
                        [
                            "type" => $type,
                            "views" => $views,
                        ],
                    ]
                ]
            ]
        ]);
    }

    public function getManifest($accessToken, $urn)
    {
        $url = Constants::getGetManifestUrl($urn);

        return $this->client->request(HttpClient::GET_REQUEST, $url, [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
        ]);
    }
}