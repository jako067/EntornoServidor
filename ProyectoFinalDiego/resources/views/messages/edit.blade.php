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
        <input type="text" name="name" id="name" value="{{old ('name') ?? $message->name}}">

        <label for="subject">Tema: </label>
        <input type="text" name="subject" id="subject" value="{{old ('subject') ?? $message->subject}}">

        <label for="text">texto: </label>
        <input type="text" name="text" id="text" value="{{old ('text') ?? $message->text}}">

        <label for="readed">Leido: </label>
        <input type="text" name="readed" id="readed" value="{{old ('readed') ?? $message->readed}}">

        <input type="submit" value="enviar">
    </form>
@endsection
