@extends('layout.layout')

@section('title')
    Mensajes
@endsection

@section('body')
    <h1> Añada su mensaje: </h1>

    <form action="{{ route('messages.update', $message) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre de su mensaje: </label>
        <input type="text" name="name" id="name" value="{{ old('name') ?? $message->name }}">
        @error('name')
            <br> Error: {{ $message }}
        @enderror <br>

        <label for="subject">Tema: </label>
        <input type="text" name="subject" id="subject" value="{{ old('subject') ?? $message->subject }}">
        @error('subject')
            <br> Error: {{ $message }}
        @enderror <br>

        <label for="text">texto: </label>
        <input type="text" name="text" id="text" value="{{ old('text') ?? $message->text }}">
        @error('text')
            <br> Error: {{ $message }}
        @enderror <br>

        <input type="submit" value="enviar">
    </form>
@endsection
