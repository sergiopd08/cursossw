<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Creador;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Curso' => 'App\Policies\CursoPolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
        'App\Models\Creador' => 'App\Policies\CreadorPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function($user) { // Gate usuario admin
            return $user->name === "ADMIN";
        });

        Gate::define('create', function(){
            if(empty(DB::select('SELECT * FROM creadores WHERE user_id =?', [Auth::user()->id]))){
                return false;
            }
            return true;
        });
    }
}
