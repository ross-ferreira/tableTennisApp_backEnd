<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Player; 
use App\Score;

use App\Http\Requests\API\ScoreRequest;

use App\Http\Resources\API\ScoreResource;

use App\Http\Resources\API\ScoreListResource;

class Scores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ScoreListResource::collection(Score::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ScoreRequest $request)
    {
        $data = $request->all();
    
        $score = Score::create($data);
    
        return new ScoreResource($score);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        return new ScoreResource($player);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ScoreRequest $request, Score $score)
    {
        $score = Score::find($id);

        $data = $request->all();

        $score->fill($data)->save();
    
        return new ScoreResource($score);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        $score->delete();
        return response(null, 204);
    }
}
