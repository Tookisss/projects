<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Data extends Model
{
  public function tags() {
      return $this->belongsToMany('App\Tag');
  }

  public function posts() {
      return $this->hasMany(Post::class);
  }

  public function User() {
      return $this->belongsTo(User::class);
  }
}
