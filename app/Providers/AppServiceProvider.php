<?php

namespace App\Providers;

use App\Network\AutoDeskApi\Auth;
use App\Network\AutoDeskApi\AutoDesk;
use App\Network\AutoDeskApi\Constants;
use App\Network\HttpClients\GuzzleClient;
use App\Network\HttpClients\Interfaces\HttpClient;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(AutoDesk::class)
            ->needs(HttpClient::class)
            ->give(function () {
                return new GuzzleClient(Constants::BASE_URL);
            });
    }
}
