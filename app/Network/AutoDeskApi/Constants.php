<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/11/2018
 * Time: 8:16 PM
 */

namespace App\Network\AutoDeskApi;


final class Constants
{
    public const BASE_URL    = "https://developer.api.autodesk.com";
    public const AUTH        = "authentication/v1/authenticate";
    public const File_UPLOAD = "https://developer.api.autodesk.com/oss/v2/buckets/:bucket/objects/:object";
}