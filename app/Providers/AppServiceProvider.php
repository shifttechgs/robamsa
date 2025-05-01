<?php

namespace App\Providers;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191); // Set default string length to 191
        Http::withoutVerifying(); // Disable SSL verification
    }
}
