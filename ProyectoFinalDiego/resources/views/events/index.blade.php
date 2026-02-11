@extends('layout.layout')

@section('title')
    Events
@endsection

@section('body')
    <br>

    Aquí apareceran los diferentes Eventos:
    <br>
    <br>
    @forelse ($events as $event)
        @if ($event->visible || (Auth::check() && Auth::user()->isAdmin()))
            <a href="{{ route('events.show', compact('event')) }}"> {{ $event->name }}</a>
            <br>
            {{ $event->description }}
            <br>
            {{ $event->location }}
            <br>
            {{ $event->map }}
            <br>
            <a href="{{ route('events.likeDislike', $event) }}">
                @if ($event->users->contains(Auth::user()))
                    <img src="/imgs-decoratives/corazónrojo.png" alt="Corasón/like/dislike">
                @else
                    <img src="/imgs-decoratives/corazónblanco.png" alt="Corasón/like/dislike">
                @endif
            </a>
            @isadmin
                <br>
                <form action="{{ route('events.destroy', $event) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="eliminar">
                </form>

                <a href="{{ route('events.edit', $event) }}">
                    Editar
                </a>

                <br>
            @endisadmin
        @endif

    @empty
        No hay Eventos
    @endforelse
@endsection
