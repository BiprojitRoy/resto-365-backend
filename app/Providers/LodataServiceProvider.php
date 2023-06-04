<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Company;
use Flat3\Lodata\Facades\Lodata;
use Illuminate\Support\ServiceProvider;

class LodataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Lodata::discover(User::class);
        Lodata::discover(Company::class);
    }
}
