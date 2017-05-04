<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\JobCategory;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $job_categories= JobCategory::all();
        View::share('job_categories', $job_categories);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
