@extends('layout.layout')

@section('title')
    jugadores
@endsection

@section('body')
    <br>

    <h1> Nuestra plantilla</h1>
    <br>
    <div class="players">
        @forelse ($players as $player)
            <div class="playerCard">
                @if ($player->visible)
                    <a href="{{ route('players.show', compact('player')) }}"> {{ $player->name }}</a>

                    <img src="/storage/{{ $player->photo }}"alt="Foto de {{ $player->name }} " width="400">
                    <br>
                    <div style="display: inline">
                        <form action="{{ route('players.destroy', $player) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="eliminar">
                        </form>
                        <a href="{{ route('players.edit', $player) }}">
                            Editar
                        </a>
                    </div>
                @endif
            </div>
        @empty

            No hay jugadores
        @endforelse
    @endsection
