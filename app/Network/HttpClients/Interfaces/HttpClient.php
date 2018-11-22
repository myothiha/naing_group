<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/11/2018
 * Time: 7:17 PM
 */

namespace App\Network\HttpClients\Interfaces;

use Psr\Http\Message\ResponseInterface;
use stdClass;

interface HttpClient
{
    const GET_REQUEST       = 'GET';
    const POST_REQUEST      = 'POST';
    const PATCH_REQUEST     = 'PATCH';
    const PUT_REQUEST       = 'PUT';
    const DELETE_REQUEST    = 'DELETE';

    function request($method, $uri, array $params);
    function getData($response);
    function getBody($response);
    function getStatus($response);
}