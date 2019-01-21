<?php

namespace App\Jobs;

use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use App\Constant;
use App\Project;
use App\ProjectFile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;

class AutoDeskManifestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $project;

    /**
     * Create a new job instance.
     *
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     * Execute the job.
     *
     * @param ViewerServiceInterface $viewer
     * @return void
     */
    public function handle(ViewerServiceInterface $viewer)
    {
        $manifest = $viewer->getManifest($this->project->projectFile)->getContents();
        $status = $manifest->status;

        Log::debug('AutoDesk Status: ' . $status);
        Log::debug('AutoDesk Progress: ' . $manifest->progress);

        $this->project->updateFileStatus(Constant::COMPLETE);
        $this->project->projectFile->updateStatus($status);

        Log::debug('Manifest Processing..');

        if ($status == ProjectFile::STATUS_PENDING
        OR $status == ProjectFile::STATUS_IN_PROGRESS) {
            $this->project->projectFile->updateStatus($status);
            static::dispatch($this->project)
                ->delay(now()->addMinute(1));
        }
    }
}
