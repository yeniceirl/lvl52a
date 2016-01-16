<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Players belonging to a team.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team(){
        return $this->belongsTo('App\Team');
    }

    /**
     * matches associated with the player
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function matches()
    {
        return $this->belongsToMany('App\Match');
    }
}
