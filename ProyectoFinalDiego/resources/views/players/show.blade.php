@extends('layout.layout')

@section('title')
    jugadores
@endsection

@section('body')
    <div style="padding:30px;
        background:#54eea9;
        border-radius:12px;
        line-height:1.8;">
        <h1> {{ $player->name }}</h1>

        <h3>
            Sus redes son:
        </h3>
        <b> Twitch: </b>{{ $player->twitch }}
        <br>
        <b> Twitter: </b>{{ $player->twitter }}
        <br>
        <b> Instagram: </b>{{ $player->instagram }}
        <br>
        <img src="/storage/{{ $player->photo }}"alt="Foto de {{ $player->name }}" width="400">
        <br>
        {{ $player->visible ? 'Es visible' : 'No es visible' }}
        <br>
    </div>
@endsection
