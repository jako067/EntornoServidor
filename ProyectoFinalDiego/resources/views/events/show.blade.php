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

    <iframe src="{{ $event->map }}" width="400" height="300"> </iframe>
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
    <a href="{{ route('events.likeDislike', [$event, 'show']) }}">
        @if ($event->users->contains(Auth::user()))
            <img src="/imgs-decoratives/corazónrojo.png" alt="Corasón/like/dislike">
        @else
            <img src="/imgs-decoratives/corazónblanco.png" alt="Corasón/like/dislike">
        @endif
    </a>


    <h3>Players</h3>
    @forelse ($players as $player)
        <form action="{{ route('events.player', $event) }}" method="POST">
            @csrf
            @isadmin()
                <button type="submit" name='player_id' value="{{ $player->id }}">
            @endisadmin
                {{ $player->name }}

                @if ($event->players->contains($player))
                    Está dentro del evento
                @else
                    No está dentro del evento
                @endif
            </button>
        </form>
        <br>
    @empty
        <p>No hay jugadores disponibles</p>
    @endforelse

@endsection
