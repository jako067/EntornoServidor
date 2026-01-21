@extends('layout.layout')

@section('title')
    jugadores
@endsection

@section('body')
    <h1>    {{ $player->name }}</h1>

    <h3>
            Sus redes son:
    </h3>
        <b> Twitch: </b>{{ $player->twitch }}
    <br>
     <b> Twitter: </b>{{ $player->twitter }}
    <br>
     <b> Instagram: </b>{{ $player->instagram }}
    <br>
    <img src="/storage/{{ $player->photo }}"alt="Foto de {{ $player->name }}"width="400">
    <br>
    {{ $player->visible ? 'Es visible' : 'No es visible' }}
    <br>
@endsection
