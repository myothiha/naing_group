<?php

namespace App\Http\Controllers;

use App\ProjectType;
use Illuminate\Http\Request;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projecttypes = ProjectType::orderBy('created_at', 'desc')->get();

        return view('admin.types.index',[
            'projecttypes'          => $projecttypes,
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
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projecttype = new ProjectType;

        $projecttype->name         = $request->name ?? '';
        $projecttype->save();

        return redirect('admin/projecttype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectType $projectType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projecttype  = ProjectType::find($id);
        return view('admin.types.edit', [

            'projecttype' => $projecttype
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $projecttype  = ProjectType::find($id);

        $projecttype->name         = $request->name ?? '';
        $projecttype->save();

        return redirect('admin/projecttype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projecttype  = ProjectType::find($id);

        $projecttype->delete();

        return redirect('admin/projecttype');
    }
}
