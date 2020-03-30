<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Player extends Model
{
    protected $fillable = ['playerName', 'gamesWon', 'totalPoints', 'gamesPlayed'];

    public function league(){
        // a comment belongs to an article
        return $this->belongsTo(League::class); 
    }
}

