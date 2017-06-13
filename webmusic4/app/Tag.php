<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Data;

class Tag extends Model
{
    public function data() {
        return $this->belongsToMany('App\Data', 'tags_id');
    }
}
