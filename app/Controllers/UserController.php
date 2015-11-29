<?php

namespace App\Controllers;

use App\Models\User;

/**
 * Controller for Blog
 */
class UserController
{

  // return all the users
  public function allUsers()
  {
      return json_encode( User::all() );
  }

  // create scope 'forId' to get user for a particular id
  public function fetch($id)
  {
    return json_encode( User::forId($id)->first());
  }


}


 ?>
