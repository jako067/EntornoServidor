@extends('layout.layout')

@section('title','personajes')

@section('body')

Este es el indice de los personajes

<a href="{{route('characters.create')}}"> <h2>Creamos personaje</h2></a>

@forelse ($characters as $character)

    <a href="{{route('characters.show',$character)}}"> <h2>{{$character->name}}</h2></a>

    <a href="{{route('characters.edit',$character)}}"> <p>Edita el personaje uwu</p>

    @empty
    No hay personajes;

@endforelse

@endsection
