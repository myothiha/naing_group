<?php

namespace App\Jobs;

use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use App\ProjectFile;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProjectFileDerivativeJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $projectFile;

    /**
     * Create a new job instance.
     *
     * @param ProjectFile $projectFile
     */
    public function __construct(ProjectFile $projectFile)
    {
        $this->projectFile = $projectFile;
    }

    /**
     * Execute the job.
     *
     * @param ViewerServiceInterface $viewer
     * @return void
     */
    public function handle(ViewerServiceInterface $viewer)
    {
        $viewer->postSvf($this->projectFile);

        AutoDeskManifestJob::dispatch($this->projectFile)
            ->delay(now()->addMinute(1));
    }
}
