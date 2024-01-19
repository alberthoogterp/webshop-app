<?php

namespace App\Providers;

use App\SeparateCLasses\DataLoader;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $categories = DataLoader::getCategorieData();
        View::share('categories', $categories);
    }
}
