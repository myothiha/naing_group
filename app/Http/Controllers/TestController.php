<?php

namespace App\Http\Controllers;

use App\Network\AutoDeskApi\AutoDesk;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $autoDesk;

    /**
     * TestController constructor.
     * @param AutoDesk $autoDesk
     */
    public function __construct(AutoDesk $autoDesk)
    {
        $this->autoDesk = $autoDesk;
    }

    public function store(Request $request)
    {
//        $model3D = $this->autoDesk->renderForViewer($request->file);
        $response = $this->autoDesk->authenticate('data:read data:write data:create bucket:read bucket:create')->getBody()->getContents();

        $token = json_decode($response)->access_token;

        $filename = $request->file('file')->getClientOriginalName();
        $request->file->move(public_path('uploads/files'), $filename);

        $target = 'uploads/files/hello.dwg';

        $response = $this->autoDesk->uploadFile($target, $token, $filename);

        dd($response->getBody()->getContents());
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
