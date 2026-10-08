<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if (isset($_ENV['VERCEL']) || getenv('VERCEL')) {
            /** @var \Illuminate\Foundation\Application $app */
            $app = $this->app;
            $app->useStoragePath('/tmp/storage');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paksa HTTPS di lingkungan Vercel / Production
        if (config('app.env') === 'production' || isset($_ENV['VERCEL']) || getenv('VERCEL')) {
            URL::forceScheme('https');
        }
    }
}