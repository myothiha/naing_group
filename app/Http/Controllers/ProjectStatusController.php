<?php

namespace App\Http\Controllers;

use App\ProjectStatus;
use Illuminate\Http\Request;

class ProjectStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $status = ProjectStatus::orderBy('created_at', 'desc')->get();

        return view('admin.status.index',[
            'status'                 => $status,
            'mainproject'           => 'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = new ProjectStatus;

        $status->name         = $request->name ?? '';
        $status->save();

        return redirect('admin/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectStatus $projectStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status  = ProjectStatus::find($id);

       return view('admin.status.edit',[
            'status'        => $status

       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $status   = ProjectStatus::find($id);

        $status->name         = $request->name ?? '';
        $status->save();

        return redirect('admin/status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectStatus  $projectStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status  = ProjectStatus::find($id);
        $status->delete();

        return redirect('admin/status');
    }
}
