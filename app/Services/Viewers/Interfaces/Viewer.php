<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/22/2018
 * Time: 7:10 PM
 */

namespace App\Services\Viewers\Interfaces;


use Illuminate\Http\UploadedFile;

interface Viewer
{
    function upload(UploadedFile $file);
    function render($view);
}