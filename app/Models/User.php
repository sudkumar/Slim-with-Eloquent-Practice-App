<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model as Model;


/**
 * Model for Users
 */
class User extends Model
{
  // return user for id
  public function scopeForId($query, $id)
  {
    return $query->where('id', $id);
  }
}


 ?>
