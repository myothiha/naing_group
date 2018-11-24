<?php
/**
 * Created by PhpStorm.
 * User: myo
 * Date: 11/23/2018
 * Time: 12:27 PM
 */

namespace App\Services\FileUploader;


use App\Services\FileUploader\Interfaces\FileUploader;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class SimpleFileUploader implements FileUploader
{

    public static function upload(UploadedFile $file, $path)
    {
        $now = Carbon::now();

        $codeRand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 6);
        $fileName = $now->timestamp . '_' . $codeRand . '.' . $file->getClientOriginalExtension();

        $file->move(public_path($path), $fileName);

        return $fileName;
    }
}