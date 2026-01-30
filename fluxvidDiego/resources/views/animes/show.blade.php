@extends('layout.layout')

@section('title','personajes')

@section('body')

Este es el show de los animes

<h2>
    Titulo: {{$anime->title}}
</h2>
    <br> Año: {{$anime->release_year}}
    <br>
    Episodios: {{$anime->episodes}}
    <br>
    Puntuacion: {{$anime->rating}}
    <br>
    El anime tiene manga?
    @if($anime->has_manga==1)Sipi

    @forelse ($anime->characters as $character)
        {{$character->name}}
        <br>

    @empty
        No hay personajes
    @endforelse

    @else Nopi
    @endif
    <br>Synopsis: {{$anime->synopsis}}
    <br> Categorias:{{$anime->tag}}
    <br>Estudio: {{$anime->studio_id}}

    <img src="/storage/{{$anime->image}}" alt="Portada de :{{$anime->title}}">
    <br>
    <a href="{{route('animes.index')}}"> Volver al listado</a>

@endsection

