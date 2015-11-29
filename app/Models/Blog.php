<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Blog extends Model
{

  // add the table name
  protected $table = 'blogs';

  // add fillable attribute for insertion
  protected $fillable = ['title', 'recog_id', 'language', 'short_info', 'info', 'published-date', 'thumb_img', 'img'];


  // return blog for id
  public function scopeForId($query, $id)
  {
    return $query->where('id', $id);
  }

}

 ?>
