<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        Gate::define("admin", function ($user) {
            if (empty($user->is_admin == false)) {
                return redirect("/logout");
            } else {
                return $user->is_admin == true;
            }
        });
        Gate::define("user", function ($user) {
            if (empty($user->is_admin == true)) {
                return redirect("/logout");
            } else {
                return $user->is_admin == false;
            }
        });
    }
}
