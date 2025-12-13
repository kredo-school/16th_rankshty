<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Admin
        Gate::define('admin', function ($user) {
            return $user->role_id === 1;
        });

        // Buyer
        Gate::define('buyer', function ($user) {
            return $user->role_id ===2;
        });

        // Seller
        Gate::define('seller', function ($user) {
            return $user->role_id ===3;
        });
    }
}
