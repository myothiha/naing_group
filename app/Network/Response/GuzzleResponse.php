<?php
/**
 * Created by PhpStorm.
 * User: myothiha
 * Date: 12/3/2018
 * Time: 4:08 PM
 */

namespace App\Network\Response;

use \Psr\Http\Message\ResponseInterface as GuzzleDefaultResponse;


class GuzzleResponse implements ResponseInterface
{

    private $guzzleDefaultResponse;

    /**
     * GuzzleResponse constructor.
     * @param GuzzleDefaultResponse $response
     */
    public function __construct(GuzzleDefaultResponse $response)
    {
        $this->guzzleDefaultResponse = $response;
    }

    public function getContents()
    {
        return json_decode($this->guzzleDefaultResponse->getBody()->getContents());
    }

    public function getRawJson()
    {
        return $this->guzzleDefaultResponse->getBody()->getContents();
    }
}