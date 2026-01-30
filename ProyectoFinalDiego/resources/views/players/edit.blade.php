@extends('layout.layout')

@section('title')
    Editar
@endsection
@section('body')

<form action="{{ route('players.update', $player) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        <label for="name">Nombre de su jugador: </label>
        <input type="text" name="name" id="name" value="{{old ('name') ?? $player->name}}">

        <label for="tiwtter">Twitter: </label>
        <input type="text" name="twitter" id="twitter" value="{{old ('twitter') ?? $player->twitter}}">

        <label for="instagram">Instagram: </label>
        <input type="text" name="instagram" id="instagram" value="{{old ('instagram') ?? $player->instagram}}">

        <label for="twitch">Twitch: </label>
        <input type="text" name="twitch" id="twitch" value="{{old ('twitch') ?? $player->twitch}}">

        <label for="photo">photo: </label>
        <input type="file" name="photo" id="photo" value="{{old ('photo') ?? $player->photo}}">


        <img src="/storage/{{old ('photo') ?? $player->photo}} "alt="Foto de {{old ('name') ?? $player->name}} width=400px">

        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" id="visible">

        <label for="position">Posición: </label>
        <input type="text" name="position" id="position" value="{{old ('photo') ?? $player->position}}">

        <label for="rating">Puntuación: </label>
        <input type="text" name="rating" id="rating" value="{{old ('photo') ?? $player->rating}}">

        <input type="submit" value="enviar">
    </form>
@endsection

