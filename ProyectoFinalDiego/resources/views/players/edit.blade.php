@extends('layout.layout')

@section('title')
    Editar
@endsection

@section('body')

<style>
    form { max-width:500px; margin:auto; }
    input { width:100%; padding:6px; margin:4px 0 10px; }
    img { max-width:100%; margin:10px 0; }
    .error { color:red; font-size:0.9em; }
</style>

<form action="{{ route('players.update', $player) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

    <label>Nombre de su jugador:</label>
    <input type="text" name="name" value="{{ old('name') ?? $player->name }}">
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Twitter:</label>
    <input type="text" name="twitter" value="{{ old('twitter') ?? $player->twitter }}">
    @error('twitter')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Instagram:</label>
    <input type="text" name="instagram" value="{{ old('instagram') ?? $player->instagram }}">
    @error('instagram')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Twitch:</label>
    <input type="text" name="twitch" value="{{ old('twitch') ?? $player->twitch }}">
    @error('twitch')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Foto:</label>
    <input type="file" name="photo">
    <img src="/storage/{{ old('photo') ?? $player->photo }}" alt="Foto">

    <label>Visible:</label>
    <input type="checkbox" name="visible">

    <label>Posición:</label>
    <input type="text" name="position" value="{{ old('position') ?? $player->position }}">
    @error('position')
        <div class="error">{{ $message }}</div>
    @enderror

    <label>Puntuación:</label>
    <input type="text" name="rating" value="{{ old('rating') ?? $player->rating }}">
    @error('rating')
        <div class="error">{{ $message }}</div>
    @enderror

    <input type="submit" value="Enviar">
</form>

@endsection
