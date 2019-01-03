<?php

namespace App\AutoDesk\Providers;

use App\AutoDesk\Api\AutoDeskApi;
use App\AutoDesk\Api\Constants;
use App\AutoDesk\Repositories\ProjectFileRepository;
use App\AutoDesk\Repositories\ProjectFileRepositoryInterface;
use App\AutoDesk\Services\Viewers\AutoDeskViewerService;
use App\AutoDesk\Services\Viewers\ViewerServiceInterface;
use App\Network\HttpClients\GuzzleClient;
use App\Network\HttpClients\Interfaces\HttpClient;

use Illuminate\Support\ServiceProvider;

class AutoDeskServiceProvider extends ServiceProvider
{

    public $bindings = [
        ProjectFileRepositoryInterface::class           => ProjectFileRepository::class,
        ViewerServiceInterface::class                  => AutoDeskViewerService::class,
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AutoDeskApi::class)
            ->needs(HttpClient::class)
            ->give(function () {
                return new GuzzleClient(Constants::BASE_URL);
            });
    }
}
