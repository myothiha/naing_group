<?php

namespace App\Http\Controllers;

use App\Whychoose;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class WhychooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whychooses  = Whychoose::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.whychooses.index',[
            'whychooses'     => $whychooses
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whychooses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $whychoose = new Whychoose;

        $whychoose->icon           = $request->icon ?? '';
        $whychoose->title           = $request->title ?? '';
        $whychoose->description      = $request->description ?? ''; 
        $whychoose->save();

        return redirect('admin/whychoose');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Whychoose  $whychoose
     * @return \Illuminate\Http\Response
     */
    public function show(Whychoose $whychoose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Whychoose  $whychoose
     * @return \Illuminate\Http\Response
     */
    public function edit(Whychoose $whychoose)
    {
        return view('admin.whychooses.edit', [

            'whychoose' => $whychoose
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Whychoose  $whychoose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whychoose $whychoose)
    {
        

        $whychoose->icon                = $request->icon ?? '';
        $whychoose->title               = $request->title ?? '';
        $whychoose->description         = $request->description ?? '';
        $whychoose->save();

        return redirect('admin/whychoose');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Whychoose  $whychoose
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whychoose $whychoose)
    {
        $whychoose->delete();

        return redirect('admin/whychoose');
    }
}
