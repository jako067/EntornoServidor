<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamCollection;
use App\Http\Resources\TeamResource;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return new TeamCollection(Team::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $team =new Team();
        $team['name'] = $request->input('name');
        $team['player1'] = $request->input('player1');
        $team['player2'] = $request->input('player2');

        $team->save();

        return (new TeamResource($team))->response();

        //revisar esta parte si algo falla.
        //Tambien cambiar esto si al final creamos un request
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return new TeamCollection($team);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
