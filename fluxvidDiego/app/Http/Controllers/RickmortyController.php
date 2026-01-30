<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class RickmortyController extends Controller
{
    public function rickmorty(): View
    {
        $response = Http::get('https://rickandmortyapi.com/api/character');
        $characters =collect($response->json('results'))
        ->map(fn($item)=>(object)$item);

        return view('rickmorty.getCharacters',compact('characters'));
    }

    //La parte de arriba funciona
        public function getCharacterById(string $id): View
    {
        $response = Http::get('https://rickandmortyapi.com/api/character/'.$id);
        $character =collect($response->json());

        return view('rickmorty.getCharacterById',compact('character'));
    }

    public function search(Request $request){

        $name=$request->input('search');

        $response = Http::get('https://rickandmortyapi.com/api/character/?name='.$name);
        $characters =collect($response->json('results'))
        ->map(fn($item)=>(object)$item);

        return view('rickmorty.search',compact('name'),compact('characters'));
    }
}
