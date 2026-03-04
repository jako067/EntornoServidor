<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GameCollection;
use App\Http\Resources\GameResource;
use App\Models\Game;
use Illuminate\Http\Request;

class GameApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new GameCollection(Game::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $game= new Game();

        $game['location']= $request->input('location');
        $game['date']= $request->input('date');
        $game['hour']= $request->input('hour');
        $game['team1']= $request->input('team1');
        $game['team2']= $request->input('team2');
        $game['sets']= $request->input('sets');
        $game['points']= $request->input('points');
        $game['winner']= $request->input('winner');
        $game->save();

        return (new GameResource($game))->response();
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return new GameResource($game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
