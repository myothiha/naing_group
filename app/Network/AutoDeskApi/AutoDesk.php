<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/11/2018
 * Time: 8:09 PM
 */

namespace App\Network\AutoDeskApi;


use App\Network\HttpClients\Interfaces\HttpClient;
use Illuminate\Http\UploadedFile;
use phpDocumentor\Reflection\Types\Resource_;

class AutoDesk
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
     * @return mixed
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
                'Content-Type'     => 'application/octet-stream',
            ],
            'form_params' => [
                'bucketKey' => $this->bucket,
                'objectName' => $filename,
            ],
            'body' => fopen($pathToFile, 'r'),
        ]);
    }
}