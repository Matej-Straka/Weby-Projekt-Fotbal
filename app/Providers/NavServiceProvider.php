<?php

namespace App\Providers;

// app/Providers/NavServiceProvider.php
use App\Models\NavLink;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class NavServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('components.dynamic-navbar', function ($view) {
            $navLinks = NavLink::orderBy('sort_order')->get();
            $view->with('navLinks', $navLinks);
        });
    }

}
