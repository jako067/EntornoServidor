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
        @if ($event->visible)
            <a href="{{ route('events.show', compact('event')) }}"> {{ $event->name }}</a>
            <br>
            {{ $event->description }}
            <br>
            {{ $event->location }}
            <br>
            {{ $event->map }}
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
            
            <a href="{{ route('events.likeDislike', [$event, 'index']) }}">
                Like/Dislike
            </a>
            <br>
            <br>
        @endif
    @empty
        No hay Eventos
    @endforelse
@endsection
