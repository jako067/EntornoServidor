@extends('layout.layout')

@section('title','personajes')

@section('body')

<h2> <br>{{$character->name}} <br>Edad: {{$character->age}}<br>Genero: {{$character->gender}}<br>Rol: {{$character->role}}<br>
    {{$character->description}}</h2>
    <br>
    <a href="{{route('characters.index')}}"> Volver al listado</h2></a>

@endsection
