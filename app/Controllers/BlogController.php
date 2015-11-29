<?php

namespace App\Controllers;

use App\Models\Blog;

/**
 * Controller for Blog
 */
class BlogController
{

  public function allBlogs()
  {
    return  json_encode(Blog::all());
  }

  public function fetch($id)
  {
    return json_encode(Blog::forId($id)->first());
  }

}


 ?>
