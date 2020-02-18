<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
  /**
  * The policy mappings for the application.
  *
  * @var array
  */
  protected $policies = [
    // 'App\Model' => 'App\Policies\ModelPolicy',
    'App\Skills' => 'App\Policies\SkillsPolicy',
  ];

  /**
  * Register any authentication / authorization services.
  *
  * @return void
  */
  public function boot(){
    $this->registerPolicies();

    //Gate qui permet seulement aux user connetés de voir les vues
    Gate::define('viewresource', function(User $user){
      return Auth::check();
    });
    Gate::define('manageresource', function(User $user, $param){
      return Auth::check() && (Auth::user()->admin || Auth::id() === $param->id);
    });
  }
}
