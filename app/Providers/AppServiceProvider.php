<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
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
        Validator::extend('reference_id_not_match', function ($attribute, $value, $parameters, $validator) {
            // Check if the reference_id matches an existing username in the users table
        return \DB::table('users')->where('username', $value)->exists();
        });
    }
}
