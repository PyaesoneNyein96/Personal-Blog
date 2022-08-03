<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('auth-user', function($user){
            return $user->status == 'admin';
        });

        // Gate::define('cmt-del', function($user, $comment){
        //     if($user->id == $comment->user_id){
        //         return true;
        //     }elseif($user->status == 'admin'){
        //         return true;
        //     }else{
        //         return false;
        //     }
        // });
        Gate::define('cmt-del', function($user, $comment){
            return $user->id == $comment->user_id || $user->status == 'admin';
        });

        Gate::define('normal-user', function($user){
           if($user->status == 'admin'){
            return true;
           }elseif($user->status == 'user'){
            return true;
           }else{
            return false;
           }
        });
    }
}
