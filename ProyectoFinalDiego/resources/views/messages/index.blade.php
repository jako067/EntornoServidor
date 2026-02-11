@extends('layout.layout')

@section('title')
    Contact
@endsection

@section('body')

    <h2 style="text-align:center;"> Mensajes</h2>

        @forelse ($messages as $message)
            <div style="padding:50px ; background-color:rgb(136, 180, 162);" >
                @if (true)
                    <a href="{{ route('messages.show', compact('message')) }}"> {{ $message->name }}</a>

                    <br>
                    <div style="display: inline;    ">
                        <form action="{{ route('messages.destroy', $message) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="eliminar">
                        </form>

                        {{ $message->user->name }} <br>

                        <a href="{{ route('messages.edit', $message) }}">
                            Editar
                        </a>

                        <br>

                        @if ($message->readed)
                            Este mensaje ha sido leído
                        @else
                            Este mensaje no ha sido leído
                        @endif

                    </div>
                @endif
            </div>
            <br>
        @empty

            No hay mensajes
        @endforelse
    @endsection
