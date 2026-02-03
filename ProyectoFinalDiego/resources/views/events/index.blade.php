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

<<<<<<< HEAD
            <a href="{{ route('events.likeDislike', [$event, 'index']) }}">
                @if ($event->users->contains(Auth::user()))

                <img src="/imgs-decoratives/corazónrojo.png" alt="Corasón/like/dislike">

                @else

                <img src="/imgs-decoratives/corazónblanco.png" alt="Corasón/like/dislike">

                @endif


=======
            <a href="{{ route('events.likeDislike', $event) }}">
                Like/Dislike
>>>>>>> 8c439980fc858ec53d5ce0112a22ef4b0279ac4d
            </a>
            <br>
            @if ($event->users->contains(Auth::user()))

                Si le dio like

            @else
                No le dió like
            @endif
            <br>
        @endif
    @empty
        No hay Eventos
    @endforelse
@endsection
