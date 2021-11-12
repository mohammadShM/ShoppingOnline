<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();
        // use gate in laravel =======================================================
        // gate define below eqauls CheckPermission midelleware class ================
        Gate::define('view-dashboard', function (User $user) {
            return $user->role->hasPermission('view-dashboard');
        });
        Gate::define('create-category', function(User $user) {
            return $user->role->hasPermission('create-category');
        });
    }
}
