@extends('layout.layout')

@section('title')
    Mensajes
@endsection

@section('body')
    Aquí mostrará un Mensaje en específico
    <br>
    {{ $message->name }}
    <br>
    {{ $message->subject }}
    <br>
    {{ $message->text }}
    <br>
    {{ $message->readed }}

@endsection
