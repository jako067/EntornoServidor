<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\ActorRequest;


class ActorController extends Controller
{

    public function index(): View
    {
        return view('actors.index');

    }
    public function show(string $actor)
    {
        return view('actors.show',compact('actor'));
    }


    public function edit(string $actor)
    {
        return view('actors.edit',compact('actor'));
    }
    public function create()
    {
        return view('actors.create');
    }
    public function store(ActorRequest $request)
    {
        $actor['name']=$request->input('name');
        $actor['nationality']=$request->input('nationality');
        $actor['born']=$request->input('born');
        return view('actors.store',compact('actor'));
    }


    /**
     * Display a listing of the resource.
     */    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Update the specified resource in storage.
     */
    //public function update(Request $request, string $actor)
    //{
        //
    //}

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(string $actor)
    //{
        //
    //}
}
