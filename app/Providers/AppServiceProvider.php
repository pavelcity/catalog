<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Catcollection;
use App\Models\Collection;

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
        view()->composer('pages.includes.footer', function ($view){
					$view->with('catscollection', Catcollection::get());
				});
    }
}
