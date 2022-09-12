<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        $this->menuLoad();
    }

    public function menuLoad()
    {
        View::composer('app.includes.nav', function ($view){
            $view->with('services', Page::all()->where('category_id', 1));
        });
        View::composer('app.includes.nav', function ($view){
            $view->with('consults', Page::all()->where('category_id', 2));
        });
        View::composer('app.includes.nav', function ($view){
            $view->with('abouts', Page::all()->where('category_id', 3));
        });
    }

}
