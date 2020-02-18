<?php

namespace App\Policies;

use App\Skills;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class SkillsPolicy{
  use HandlesAuthorization;

  /**
  * Determine whether the user can view any skills.
  *
  * @param  \App\User  $user
  * @return mixed
  */
  public function viewAny(User $user){
    //On peut utiliser les gates mais pas que
    //return Gate::check('viewresource', $user);
    //Creons notre propre gate :
    return Auth::check();
  }

  /**
  * Determine whether the user can view the skills.
  *
  * @param  \App\User  $user
  * @param  \App\Skills  $skills
  * @return mixed
  */
  public function view(User $user, Skills $skills){
    return Auth::check();
  }

  /**
  * Determine whether the user can create skills.
  *
  * @param  \App\User  $user
  * @return mixed
  */
  public function create(User $user){
    return Auth::check(); && ($user->admin);
  }

  /**
  * Determine whether the user can update the skills.
  *
  * @param  \App\User  $user
  * @param  \App\Skills  $skills
  * @return mixed
  */
  public function update(User $user, Skills $skills){
    return Auth::check() && ($user->admin);
  }

  /**
  * Determine whether the user can delete the skills.
  *
  * @param  \App\User  $user
  * @param  \App\Skills  $skills
  * @return mixed
  */
  public function delete(User $user, Skills $skills){
    return Auth::check() && ($user->admin);
  }

  /**
  * Determine whether the user can restore the skills.
  *
  * @param  \App\User  $user
  * @param  \App\Skills  $skills
  * @return mixed
  */
  public function restore(User $user, Skills $skills){
    //
  }

  /**
  * Determine whether the user can permanently delete the skills.
  *
  * @param  \App\User  $user
  * @param  \App\Skills  $skills
  * @return mixed
  */
  public function forceDelete(User $user, Skills $skills){
    //
  }
}
