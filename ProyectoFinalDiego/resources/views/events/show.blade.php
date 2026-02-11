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
    <a href="{{ route('events.likeDislike', [$event, 'show']) }}">
        @if ($event->users->contains(Auth::user()))
            <img src="/imgs-decoratives/corazónrojo.png" alt="Corasón/like/dislike">
        @else
            <img src="/imgs-decoratives/corazónblanco.png" alt="Corasón/like/dislike">
        @endif
    </a>

    @isadmin()
        <h3>Players</h3>
        @forelse ($players as $player)
            <form action="{{ route('events.player', $event) }}" method="POST">
                @csrf

                <button type="submit" name='player_id' value="{{ $player->id }}">
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
    @endisadmin
@endsection
