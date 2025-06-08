<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Faculty;
use Illuminate\Support\Facades\View;

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
        View::composer('components.ppi-dropdown', function ($view) {
        $view->with('faculties', Faculty::all());
    });
    }
}
