<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;
use Illuminate\Support\Facades\Schema;

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
        //
        view()->composer('layouts.sidebar', function ($view) {
            $view->with('archives', \App\Post::archives());
            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        /*
        \App::singleton('App\Billing\Stripe' , function () {
            return new \App\Billing\Stripe(config('services.stripe.secret'));
        });*/

        $this->app->singleton(Stripe::class , function () {
            return new Stripe(config('services.stripe.secret'));
        });
    }
}
