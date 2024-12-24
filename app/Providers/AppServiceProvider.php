<?php

namespace App\Providers;

use AlexMasterov\OAuth2\Client\Provider\HeadHunter;
use App\Services\HeadHunter\HeadHunterApiClient;
use App\Services\HeadHunter\HeadHunterException;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        if ($this->app->environment('local')) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        $this->app->singleton(HeadHunterApiClient::class, function (): HeadHunterApiClient {
            return new HeadHunterApiClient(
                    app(HeadHunter::class),
                    [],
                    app(LoggerInterface::class)
                );
        }); //TODO FIX
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
