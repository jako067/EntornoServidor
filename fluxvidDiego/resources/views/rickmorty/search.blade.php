
    @extends('layout.layout')

    @section('title','characters')
    @section('body')

    <h1>Lista de personajes: </h1>

    <div style="display:flex; width: 1800px; flex-wrap:wrap; gap:150px;">

        @forelse ($characters as $character )
        <a style="color: white; text-decoration:none" href ="{{route('rickmorty.character', $character->id)}}">
        <div style="display: flex; flex-direction:column" >
            <h1>{{$character->name}}</h1>

            <img src="{{$character->image}}" alt="{{$character->name}}">

        </div>
        </a>

    @empty
    No hay personajes;

    @endforelse
    </div>
    @endsection

