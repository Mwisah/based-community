<?php

namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

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

        view()->composer(
            'partials.menu',
            function ($view) {
                $view->with('categories', \App\Models\Category::where('active', 1)->get());
            }
        );
        view()->composer(
            'partials.adminmenu',
            function ($view) {
                $view->with('categories', \App\Models\Category::all());
            }
        );
    }
}