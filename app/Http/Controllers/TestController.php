<?php

namespace App\Http\Controllers;

use App\Network\AutoDeskApi\AutoDesk;
use App\Services\FileUploader\SimpleFileUploader;
use App\Services\Viewers\AutoDesk\AutoDesk3DViewer;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $viewer;

    /**
     * TestController constructor.
     * @param AutoDesk3DViewer $autoDesk3DViewer
     */
    public function __construct(AutoDesk3DViewer $autoDesk3DViewer)
    {
        $this->viewer = $autoDesk3DViewer;
    }

    public function store(Request $request)
    {
//        dd($request->file)
        $this->viewer->upload($request->file);
    }

    public function test()
    {
        try {
            return dd($this->autoDesk->authenticate('data:read data:write data:create bucket:read bucket:create'));
        } catch (\Exception $e) {
            dd($e);
        }
    }

}
