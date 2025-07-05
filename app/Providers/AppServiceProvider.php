<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Contact;
use App\Models\Hero;

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
        View::composer('front-end.master', function ($view) {
            $contact = Contact::where('status_publish', 1)->first();
            $view->with('contact_info', $contact);
        }); 

        // Hero Section
        view()->composer('*', function ($view) {
            $view->with('hero_info', Hero::where('status_publish', 1)->get());
        });

    }
}
