<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //Data share by inertia js
        //reference link: https://sebastiandedeyne.com/handling-routes-in-a-laravel-inertia-application/
        // Inertia::share('appName', config('app.name'));
        Inertia::share('name', function () {
            return [
                'creator' => 'Masud parbhez'
            ];
        });
    }
}
