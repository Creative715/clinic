<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Pagero;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        $this->menuLoad();
    }

    public function menuLoad()
    {
        View::composer(['app.includes.nav', 'app.includes.footer', 'app.includes.nav_ro', 'app.includes.footer_ro'], function ($view){
            $view->with('services', Page::all()->where('category_id', 1));
            $view->with('consults', Page::all()->where('category_id', 2));
            $view->with('abouts', Page::all()->where('category_id', 3));
            $view->with('services1', Pagero::all()->where('category_id', 1));
            $view->with('consults1', Pagero::all()->where('category_id', 2));
            $view->with('abouts1', Pagero::all()->where('category_id', 3));
        });
    }

}
