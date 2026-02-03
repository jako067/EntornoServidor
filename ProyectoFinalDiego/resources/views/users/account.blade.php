@extends('layout.layout')

@section('title', 'account')

@section('body')

Nombre:    {{ Auth::user()->name }}
    <br>
Nombre de usuario:        {{ Auth::user()->username }}
    <br>
Email:    {{ Auth::user()->email }}
    <br>
    <img src="/storage/{{ Auth::user()->photo }}"alt="Foto de {{ Auth::user()->name }} " width="200">
<br>

    Esto es el show
@endsection
