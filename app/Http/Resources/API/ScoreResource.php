<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class ScoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "round" => $this->round, 
            "player1_id" => $this->player1_id,
            "scoreP1" => $this->scoreP1,
            "resultP1" => $this->resultP1,
            "player2_id" => $this->player2_id,
            "scoreP2" => $this->scoreP2,
            "resultP2" => $this->resultP2,
            ];
    }
}

