<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/11/2018
 * Time: 8:16 PM
 */

namespace App\AutoDesk\Api;

final class Constants
{
    public const BASE_URL    = "https://developer.api.autodesk.com";
    public const AUTH        = "/authentication/v1/authenticate";
    public const FILE_UPLOAD = "/oss/v2/buckets/:bucket/objects/:object";
    public const MODEL_DERIVATIVE = "/modelderivative/v2/designdata/job";
    public const GET_MANIFEST = "/modelderivative/v2/designdata/:urn/manifest";

    public static function getFileUploadUrl($fileName, $bucketName)
    {
        $url = str_replace(':bucket', $bucketName, self::FILE_UPLOAD);
        $url = str_replace(':object', $fileName, $url);
        return $url;
    }

    public static function getGetManifestUrl($urn)
    {
        $url = str_replace(':urn', $urn, self::GET_MANIFEST);
        return $url;
    }
}