<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class LeagueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "round" => ["required", "integer"],
            "player1_id" => ["required", "integer"],
            "scoreP1" => ["required", "integer"],
            "resultP1" => ["required", "string"],
            "player2_id" => ["required", "integer"],
            "scoreP2" => ["required", "integer"],
            "resultP2" => ["required", "string"],
        ];
    }
}
