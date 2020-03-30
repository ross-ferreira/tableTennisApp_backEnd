<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\League;

use App\Http\Requests\API\LeagueRequest;

use App\Http\Resources\API\LeagueResource;

use App\Http\Resources\API\LeagueListResource;

class Leagues extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LeagueListResource::collection(League::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LeagueRequest $request)
    {
        $data = $request->all();
    
        $league = League::create($data);
    
        return new LeagueResource($league);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(League $league)
    {
        return new LeagueResource($league);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LeagueRequest $request, League $league)
    {
        $league = League::find($id);

        $data = $request->all();

        $league->fill($data)->save();
    
        return new LeagueResource($league);
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
