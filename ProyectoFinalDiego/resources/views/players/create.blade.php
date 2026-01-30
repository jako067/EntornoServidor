@extends('layout.layout')

@section('title')
    jugadores
@endsection

@section('body')
    <h1> Añada su jugador: </h1>

    <form action="{{ route('players.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <label for="name">Nombre de su jugador: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="tiwtter">Twitter: </label>
        <input type="text" name="twitter" id="twitter">
        <br>
        <label for="instagram">Instagram: </label>
        <input type="text" name="instagram" id="instagram">
        <br>
        <label for="twitch">Twitch: </label>
        <input type="text" name="twitch" id="twitch">
        <br>
        <label for="photo">photo: </label>
        <input type="file" name="photo" id="photo">
        <br>
        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" id="visible">
        <br>
        <label for="position">Posición: </label>
        <input type="text" name="position" id="position">
        <br>
        <label for="rating">Puntuación: </label>
        <input type="text" name="rating" id="rating">
        <br>
        <input type="submit" value="enviar">
    </form>
@endsection
