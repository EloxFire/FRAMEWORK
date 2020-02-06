<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

  protected $fillable = ['comp_name', 'comp_level'];
  /**
  * Récupère les utilisateurs possédant cette compétences.
  */
  public function users()
  {
    return $this->belongsToMany('App\User')->withPivot('level');
  }
}
