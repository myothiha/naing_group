<?php
/**
 * Created by PhpStorm.
 * User: myo
 * Date: 11/23/2018
 * Time: 12:03 PM
 */

namespace App\Services\Viewers\AutoDesk;

use App\Network\AutoDeskApi\AutoDesk;
use App\Services\FileUploader\SimpleFileUploader;
use App\Services\Viewers\Interfaces\Viewer;
use Illuminate\Http\UploadedFile;

class AutoDesk3DViewer implements Viewer
{
    private $autoDesk;

    public function __construct(AutoDesk $autoDesk)
    {
        $this->autoDesk = $autoDesk;
    }

    function upload(UploadedFile $file)
    {
        $response = $this->autoDesk->authenticate('data:read data:write data:create bucket:read bucket:create')->getBody()->getContents();
        $accessToken = json_decode($response)->access_token;

        $target = '/uploads/files/';
        $filename = SimpleFileUploader::upload($file, $target);

        $response = $this->autoDesk->uploadFile(public_path('/uploads/files/') . $filename, $accessToken, $filename);

        dd($response->getBody()->getContents());
    }

    function render($view)
    {
        return view($view);
    }
}