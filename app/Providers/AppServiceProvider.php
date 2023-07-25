<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\{ Category, Actor };

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            'App\Repositories\PhotosRepositoryInterface',
            'App\Repositories\PhotosRepository'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['index', 'create', 'edit'], function ($view) {
            $view->with('categories', Category::all());
            $view->with('actors', Actor::all());
        });
    }
}
