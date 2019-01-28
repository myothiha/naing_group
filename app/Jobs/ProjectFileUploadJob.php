<?php

namespace App\Jobs;

use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use App\Constant;
use App\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProjectFileUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $project;
    protected $pathToFile;
    protected $filename;

    /**
     * Create a new job instance.
     *
     * @param Project $project
     * @param $pathToFile
     * @param $filename
     */
    public function __construct(Project $project, $pathToFile, $filename)
    {
        $this->project = $project;
        $this->pathToFile = $pathToFile;
        $this->filename = $filename;
    }

    /**
     * Execute the job.
     *
     * @param ViewerServiceInterface $viewer
     * @return void
     */
    public function handle(ViewerServiceInterface $viewer)
    {
        $projectFile = $viewer->upload($this->pathToFile, $this->filename);
        $this->project->projectFile()->save($projectFile);
        $this->project->updateFileStatus(Constant::UPLOADED);
        unlink($this->pathToFile);
//        $derivativeFile = $this->viewer->postSvf($projectFile);
        //Dispatch Project File to Derivative queue
        ProjectFileDerivativeJob::dispatch($this->project);
    }
}
