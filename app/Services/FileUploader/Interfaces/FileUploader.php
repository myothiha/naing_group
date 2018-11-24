<?php
/**
 * Created by PhpStorm.
 * User: myo
 * Date: 11/23/2018
 * Time: 12:25 PM
 */

namespace App\Services\FileUploader\Interfaces;


use Illuminate\Http\UploadedFile;

interface FileUploader
{
    /**
     * @param UploadedFile $file
     * @return mixed
     */
    static function upload(UploadedFile $file, $path);
}