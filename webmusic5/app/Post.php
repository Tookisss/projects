<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Data;


class Post extends Model
{
    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Data() {
        return $this->belongsTo(Data::class);
    }
}
