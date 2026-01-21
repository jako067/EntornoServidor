@extends('layout.layout')

@section('title')
    jugadores
@endsection

@section('body')
    <h1> Añada su jugador: </h1>

    <form action="{{ route('players.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="name">Nombre de su jugador: </label>
        <input type="text" name="name" id="name">

        <label for="tiwtter">Twitter: </label>
        <input type="text" name="twitter" id="twitter">

        <label for="instagram">Instagram: </label>
        <input type="text" name="instagram" id="instagram">

        <label for="twitch">Twitch: </label>
        <input type="text" name="twitch" id="twitch">

        <label for="photo">photo: </label>
        <input type="file" name="photo" id="photo">

        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" id="visible">

        <input type="submit" value="enviar">
    </form>
@endsection
