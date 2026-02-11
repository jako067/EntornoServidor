<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players =Player::get();
        return(view('players.index', compact('players')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $players=Player::get();
        return(view('players.create',compact("players")));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerRequest $request)
    {
        $player=new Player();
        $generatedName =$request->file('photo')->store('players/photos','public');
        $player['name']=$request->input('name');
        $player['twitter']=$request->input('twitter');
        $player['instagram']=$request->input('instagram');
        $player['twitch']=$request->input('twitch');
        $player['photo']=$generatedName;
        $player['visible']=$request->input('visible')?1:0;

        $player['position']=$request->input('position');
        $player['rating']=$request->input('rating');

        $player->save();

        return (redirect()->route('players.show', $player));

    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        return view('players.show',compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        return view('players.edit',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlayerRequest $request, Player $player)
    {
        $generatedName =$request->file('photo')->store('players/photos','public');
        $player['name']=$request->input('name');
        $player['twitter']=$request->input('twitter');
        $player['instagram']=$request->input('instagram');
        $player['twitch']=$request->input('twitch');
        $player['photo']=$generatedName;
        $player['visible']=$request->input('visible')?1:0;

        $player['position']=$request->input('position');
        $player['rating']=$request->input('rating');

        $player->save();
        return (redirect()->route('players.show', $player));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index');
    }
}
