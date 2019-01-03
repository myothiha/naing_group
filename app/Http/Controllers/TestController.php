<?php

namespace App\Http\Controllers;

use App\AutoDesk\Services\Viewers\AutoDeskViewerService;
use App\ProjectFile;
use App\Services\FileUploader\SimpleFileUploader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    private $viewer;

    /**
     * TestController constructor.
     * @param AutoDeskViewerService $autoDeskViewer
     */
    public function __construct(AutoDeskViewerService $autoDeskViewer)
    {
        $this->viewer = $autoDeskViewer;
    }

    public function invcaptcha()
    {
        return view('test.sms.invcaptcha');
    }

    public function store(Request $request)
    {
        $filename = SimpleFileUploader::upload($request->file, ProjectFile::UPLOAD_PATH);

//        $projectFile = $this->viewer->upload($filename);
//        $derivativeFile = $this->viewer->postSvf($projectFile);
//        $projectFile->title = $request->title;
//        $projectFile->save();
//        sleep(15);
//        dd($projectFile->urn);
//        $projectFile = ProjectFile::find(28);
//        $manifest = $this->viewer->getManifest($projectFile);
//        $data['filename'] = $projectFile;
        return $filename;
    }

    public function test()
    {
        $projectFile = ProjectFile::find(1);
        $response = $this->viewer->getManifest($projectFile);
        dd($response->getContents());
        return $this->viewer->render('test.viewer', $projectFile);
//        return $response->getRawJson();
    }

}
