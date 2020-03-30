<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $fillable = ['round', 'player1_id', 'scoreP1', 'resultP1','player2_id', 'scoreP2', 'resultP2'];
    
    public function players(){
        // use hasMany relationship method
        return $this->hasMany(Player::class); 
    }

}
