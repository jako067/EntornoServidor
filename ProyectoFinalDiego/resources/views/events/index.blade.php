@extends('layout.layout')

@section('title')
    Events
@endsection

@section('body')
    <br>

    @forelse ($events as $event)
        @if ($event->date > now() || (Auth::check() && Auth::user()->isAdmin()))
            @if ($event->visible || (Auth::check() && Auth::user()->isAdmin()))
                <div style="
                    padding:25px;
                    background:#86f6e5;
                    border-radius:12px;
                    line-height:1.6;
                    display:flex;
                    gap:30px;
                    margin-bottom:20px;
                    align-items:flex-start;
                ">

                    <div style="flex:1;">
                        <h3 style="margin:0 0 10px 0;">
                            <a href="{{ route('events.show', compact('event')) }}">
                                {{ $event->name }}
                            </a>
                        </h3>

                        <div>{{ $event->description }}</div>
                        <div> {{ $event->location }}</div>
                        <div> {{ $event->date }}</div>

                        <a href="{{ route('events.likeDislike', $event) }}">
                            @if ($event->users->contains(Auth::user()))
                                <img src="/imgs-decoratives/corazónrojo.png" alt="like" width="30">
                            @else
                                <img src="/imgs-decoratives/corazónblanco.png" alt="like" width="30">
                            @endif
                        </a>

                        @isadmin
                            <br><br>
                            <form action="{{ route('events.destroy', $event) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="eliminar">
                            </form>

                            <a href="{{ route('events.edit', $event) }}">
                                Editar
                            </a>
                        @endisadmin
                    </div>

                    <div>
                        <iframe src="{{ $event->map }}" width="350" height="250"
                            style="border-radius:10px; border:none;">
                        </iframe>
                    </div>

                </div>
            @endif
        @endif
    @empty
        No hay Eventos
    @endforelse
@endsection
