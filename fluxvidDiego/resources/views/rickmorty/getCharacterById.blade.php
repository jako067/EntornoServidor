@extends('layout.layout')
@section('title','Personaje')
@section('body')

<h1>Información del personaje</h1>

<h3>Nombre: {{$character['name']}}</h3>
<h3>Status:   {{$character['status']}}</h3>
<h3>    Especie: {{$character['species']}}</h3>
<h3>    Tipo: {{$character['type']}}</h3>
<h3>    Genero: {{$character['gender']}}</h3>
<h3>    Origen: {{$character['origin']['name']}}</h3>
<img src="{{$character['image']}}" alt="{{$character['name']}}">
<br>

@endsection
