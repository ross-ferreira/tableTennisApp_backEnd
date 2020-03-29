<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
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
            "playerName" => $this->playerName, 
            "gamesWon" => $this->gamesWon,
            "totalPoints" => $this->totalPoints,
            "gamesPlayed" => $this->gamesPlayed,
            ];
    }
}

