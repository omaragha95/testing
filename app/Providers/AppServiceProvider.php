<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;
use Illuminate\Support\Facades\Schema;
use App\Category;
use App\Country;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->share('categories', Category::all());
        view()->share('countries', Country::all());

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
