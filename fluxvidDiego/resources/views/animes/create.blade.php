@extends('layout.layout')

@section('title', 'crear')

@section('body')

    <form method="post" action="{{ route('animes.store') }}">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title">
        <label for="release_year">Año</label>
        <input type="text" name="release_year" id="release_year">
        <label for="episodes">Episodios</label>
        <input type="text" name="episodes" id="episodes">
        <label for="rating">Puntuacion</label>
        <input type="text" name="rating" id="rating">

        <select name="studio">
            <option value=""> Selecciona un Estudio</option>
            @foreach ($studios as $studio)
                <option> {{$studio->name}} </option>

            @endforeach

        </select>

        <input type="submit" name="submit" id="submit">
    </form>

@endsection
