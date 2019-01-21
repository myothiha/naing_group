<?php

namespace App\Http\Controllers;

use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use App\Constant;
use App\Jobs\ProjectFileUploadJob;
use App\Project;
use App\ProjectFile;
use Illuminate\Http\Request;

class ProjectFileController extends Controller
{

    private $viewer;

    /**
     * ProjectFileController constructor.
     * @param ViewerServiceInterface $viewer
     */
    public function __construct(ViewerServiceInterface $viewer)
    {
        $this->viewer = $viewer;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = ProjectFile::all();
        return view('admin.projectFiles.index', [
            'files' => $files
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function create(Project $project)
    {
        return view('admin.projectFiles.create', [
            'project' => $project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Project $project
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
        $filename = $request->filename;
        $project->updateFileStatus(Constant::UPLOADING);

        $pathToFile = public_path(ProjectFile::UPLOAD_PATH) . $filename;

        ProjectFileUploadJob::dispatch($project, $pathToFile, $filename);

        //        $projectFile = $this->viewer->upload($pathToFile, $filename);
//        $derivativeFile = $this->viewer->postSvf($projectFile);
        //Dispatch Project File to Derivative queue
//        ProjectFileDerivativeJob::dispatch($projectFile);
//        sleep(15);
//        dd($projectFile->urn);
//        $projectFile = ProjectFile::find(28);
//        $manifest = $this->viewer->getManifest($projectFile);
        return redirect()->action('ProjectController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectFile $projectFile)
    {
        return $this->viewer->render('admin.projects.viewer', $projectFile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectFile $projectFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectFile $projectFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectFile  $projectFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectFile $projectFile)
    {
        //
    }
}
