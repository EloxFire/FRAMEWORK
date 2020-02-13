<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

  protected $fillable = ['name', 'description', 'logo'];
  /**
  * Récupère les utilisateurs possédant cette compétences.
  */
  public function users()
  {
    return $this->belongsToMany('App\User')->withPivot('level');
  }
}
