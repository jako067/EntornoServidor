<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpaceRequest;
use App\Models\Space;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spaces =Space::get();
        return view('space.index',compact('spaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('space.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpaceRequest $request)
    {
        $space= new Space();
        $space->flat=$request->input('flat');
        $space->code=$request->input('code');
        $space->building=$request->input('building');
        $space->save();

        return (redirect()->route('space.show',$space));
    }

    /**
     * Display the specified resource.
     */
    public function show(Space $space)
    {
        return view('space.show', compact('space'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Space $space)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Space $space)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Space $space)
    {
        //
    }
}
