@extends('layout.layout')

@section('title')

Contact
@endsection

@section('body')

Aquí apareceran los mensajes

<div class="messages">
        @forelse ($messages as $message)
            <div class="messageCard">
                @if (true)
                    <a href="{{ route('messages.show', compact('message')) }}"> {{ $message->name }}</a>

                    <br>
                    <div style="display: inline">
                        <form action="{{ route('messages.destroy', $message) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="eliminar">
                        </form>
                        <a href="{{ route('messages.edit', $message) }}">
                            Editar
                        </a>
                    </div>
                @endif
            </div>
            <br>
        @empty

            No hay mensajes
        @endforelse

<br>
<a href="{{route('messages.create')}}"> Crear nuevo Mensaje </a>


@endsection
