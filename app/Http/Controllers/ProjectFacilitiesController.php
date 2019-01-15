<?php

namespace App\Http\Controllers;

use App\ProjectFacilities;
use Illuminate\Http\Request;

class ProjectFacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $facilitys      = ProjectFacilities::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.facilitys.index',[
            'facilitys'             => $facilitys,
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
        return view('admin.facilitys.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facility = new ProjectFacilities;

        $facility->name         = $request->name ?? '';
        $facility->icon         = $request->icon ?? '';
        $facility->save();

        return redirect('admin/projectfacilities');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectFacilities  $projectFacilities
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectFacilities $projectFacilities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectFacilities  $projectFacilities
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projectFacilities = ProjectFacilities::find($id);

        return view('admin.facilitys.edit',[
            'projectFacilities'         => $projectFacilities
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectFacilities  $projectFacilities
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $facility = ProjectFacilities::find($id);

        $facility->name         = $request->name ?? '';
        $facility->icon         = $request->icon ?? '';
        $facility->save();

        return redirect('admin/projectfacilities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectFacilities  $projectFacilities
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projectFacilities = ProjectFacilities::find($id);

        $projectFacilities->delete();

        return redirect('admin/projectfacilities');
    }
}
