<?php

namespace App\Http\Controllers;

use App\Milestone;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $milestones      = Milestone::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.milestones.index',[
            'milestones'                => $milestones,
            'mainmilestone'             => 'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.milestones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('image')){

        $imagePath = Image::upload( $request->file('image') , '/uploads/milestones/');
        }
        $milestone = new Milestone;

        $milestone->title                   = $request->title ?? '';
        $milestone->description             = $request->description ?? '';
        $milestone->location                = $request->location ?? '';
        $milestone->date                    = $request->date ?? '';
        $milestone->image                   = $imagePath ?? '';
        $milestone->save();

        return redirect('admin/milestone');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function show(Milestone $milestone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function edit(Milestone $milestone)
    {
        return view('admin.milestones.edit', [

            'milestone' => $milestone,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Milestone $milestone)
    {
        if($request->file('image')) 
        {
            $imagePath = Image::upload( $request->file('image') , '/uploads/milestone/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        $milestone->title                   = $request->title ?? '';
        $milestone->description             = $request->description ?? '';
        $milestone->location                = $request->location ?? '';
        $milestone->date                    = $request->date ?? '';
        $milestone->image                   = $imagePath ?? '';
        $milestone->save();

        return redirect('admin/milestone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Milestone  $milestone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milestone $milestone)
    {
        $milestone->delete();

        return redirect('/admin/milestone');
    }
}
