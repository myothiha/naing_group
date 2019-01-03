<?php

namespace App\Jobs;

use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use App\ProjectFile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AutoDeskManifestJob implements ShouldQueue
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
        $manifest = $viewer->getManifest($this->projectFile)->getContents();
        $status = $manifest->status;

        Log::debug('AutoDesk Status: ' . $status);
        Log::debug('AutoDesk Progress: ' . $manifest->progress);

        $this->projectFile->updateStatus($status);

        Log::debug('Manifest Processing..');

        if ($status == ProjectFile::STATUS_PENDING
        OR $status == ProjectFile::STATUS_IN_PROGRESS) {
            $this->projectFile->updateStatus($status);
            static::dispatch($this->projectFile)
                ->delay(now()->addMinute(1));
        }
    }
}
