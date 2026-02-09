@extends('layout.layout')

@section('title')
    Eventos
@endsection

@section('body')
    Aquí mostrará un Evento en específico
    <br>
    {{ $event->name }}
    <br>
    {{ $event->description }}
    <br>
    {{ $event->location }}
    <br>
    {{ $event->map }}
    <br>
    {{ $event->date }}
    <br>
    {{ $event->hour }}
    <br>
    {{ $event->type }}
    <br>
    {{ $event->tag }}
    <br>
    {{ $event->visible ? 'Es visible' : 'No es visible' }}
    <br>
    <a href="{{route('events.likeDislike', [$event, 'show']) }}">
         @if ($event->users->contains(Auth::user()))

                <img src="/imgs-decoratives/corazónrojo.png" alt="Corasón/like/dislike">

                @else

                <img src="/imgs-decoratives/corazónblanco.png" alt="Corasón/like/dislike">

                @endif
    </a>
@endsection
