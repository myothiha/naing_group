<?php

namespace App\Jobs;

use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProjectFileUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $projectTitle;
    protected $pathToFile;
    protected $filename;

    /**
     * Create a new job instance.
     *
     * @param $projectTitle
     * @param $pathToFile
     * @param $filename
     */
    public function __construct($projectTitle, $pathToFile, $filename)
    {
        $this->projectTitle = $projectTitle;
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
        $projectFile->title = $this->projectTitle;
        $projectFile->save();
//        $derivativeFile = $this->viewer->postSvf($projectFile);
        //Dispatch Project File to Derivative queue
        ProjectFileDerivativeJob::dispatch($projectFile);
    }
}
