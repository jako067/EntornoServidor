<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Studio;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animes =Anime::orderBy('release_year')->paginate('5');

        return view('animes.index',compact('animes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $studios=Studio::get();
        return view('animes.create',compact('studios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $anime= new Anime();
        $anime['title']=$request->input('title');
        $anime['release_year']=$request->input('release_year');
        $anime['episodes']=$request->input('episodes');
        $anime['rating']=$request->input('rating');
        $anime['slug']=Str::slug($request->input('title'));
        $anime['studio_id']=$request->input('studio_id');
        $anime->save();

        return (redirect()->route('anime.show',$anime));
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {

        return view('animes.show',compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        $studios=Studio::get();
        return view('animes.edit',compact('anime'),compact('studios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        $generatedName =$request->file('image')->store('animes/covers','public');
        $anime->image=$generatedName;
        $anime->save();

        return redirect()->route('animes.show',$anime);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        return redirect()->route('animes.index');
    }
    /*public function addSlug(){        Usamos esto para crear el campo Slug dentro de la tabla.
        $animes=Anime::get();
        foreach($animes as $anime){
            $anime->slug=Str::slug($anime->title);
            $anime->save();
        }
        return('Todo hecho');
    }
*/
}
