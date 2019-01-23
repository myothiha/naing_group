<?php
/**
 * Created by PhpStorm.
 * User: myopc
 * Date: 11/22/2018
 * Time: 7:10 PM
 */

namespace App\AutoDesk\Services\Viewers;

use App\Network\Response\ResponseInterface;
use App\ProjectFile;
use Illuminate\Http\UploadedFile;

interface ViewerServiceInterface
{
    function upload($pathToFile, $fileName) : ProjectFile;
    function postSvf(ProjectFile $projectFile);
    function render($view, $projectFile, $param = []);
    function getManifest(ProjectFile $projectFile) : ResponseInterface;
}
