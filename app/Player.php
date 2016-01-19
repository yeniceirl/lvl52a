<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;

    public function team(){
        return $this->belongsTo('App\Team');
    }
}
