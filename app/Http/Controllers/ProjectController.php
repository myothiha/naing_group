<?php

namespace App\Http\Controllers;

use App\Project;
use App\City;
use App\ProjectFacilities;
use App\ProjectType;
use App\ProjectStatus;
use Illuminate\Http\Request;
use App\Util\Uploader\Image;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects      = Project::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.projects.index',[
            'projects'          => $projects,
            'mainproject'       => 'active',
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facilities                 = ProjectFacilities::all();
        $cities                     = City::all();
        $project_statuses           = ProjectStatus::all();
        $project_types              = ProjectType::all();
        return view('admin.projects.create',[
            'facilities'            => $facilities,
            'cities'                => $cities,
            'project_statuses'      => $project_statuses,
            'project_types'         => $project_types,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('feature_image')){

        $imagePath = Image::upload( $request->file('feature_image') , '/uploads/projects/');
        }

        if($request->file('banner_image')){

        $imagePathBanner = Image::upload( $request->file('banner_image') , '/uploads/banner');
        }
        $project = new Project;

        $project->name                              = $request->name ?? '';
        $project->description                       = $request->description ?? '';
        $project->price                             = $request->price ?? '';
        $project->project_status_id                 = $request->project_status_id ?? '';
        $project->project_type_id                   = $request->project_type_id ?? '';
        $project->city_id                           = $request->city_id ?? '';
        $project->feature_image                     = $imagePath ?? '';
        $project->banner_image                      = $imagePathBanner ?? '';
        $project->map                               = $request->map ?? '';
        $project->save();

       

        return redirect('admin/project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $facilities             = ProjectFacilities::all();
        $cities                 = City::all();
        $project_statuses       = ProjectStatus::all();
        $project_types          = ProjectType::all();
        return view('admin.projects.edit',[
            'facilities'            => $facilities,
            'cities'                => $cities,
            'project_statuses'      => $project_statuses,
            'project_types'         => $project_types,
            'project'               => $project,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
         if($request->file('feature_image')){

        $imagePath = Image::upload( $request->file('feature_image') , '/uploads/projects/');
        }
        else
        {
            $imagePath = $request->prev_image;
        }

        if($request->file('banner_image')){

        $imagePathBanner = Image::upload( $request->file('banner_image') , '/uploads/banner');
        }
        else
        {
            $imagePathBanner = $request->prev_image;
        }
        
        $project->name                              = $request->name ?? '';
        $project->description                       = $request->description ?? '';
        $project->price                             = $request->price ?? '';
        $project->project_status_id                 = $request->project_status_id ?? '';
        $project->project_type_id                   = $request->project_type_id ?? '';
        $project->city_id                           = $request->city_id ?? '';
        $project->feature_image                     = $imagePath ?? '';
        $project->banner_image                      = $imagePathBanner ?? '';
        $project->map                               = $request->map ?? '';
        $project->save();

       

        return redirect('admin/project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/admin/project');
    }
}
