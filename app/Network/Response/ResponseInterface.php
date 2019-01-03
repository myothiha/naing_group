<?php
/**
 * Created by PhpStorm.
 * User: myothiha
 * Date: 12/3/2018
 * Time: 4:06 PM
 */

namespace App\Network\Response;


interface ResponseInterface
{
    function getContents();
    function getRawJson();
}