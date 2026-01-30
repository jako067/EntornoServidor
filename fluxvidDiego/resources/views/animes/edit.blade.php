@extends('layout.layout')

@section('title', 'editar')

@section('body')

    <form method="post" enctype="multipart/form-data" action="{{ route('animes.update',$anime) }}">
        @csrf
        @method('put')
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value={{$anime->title}}>
        <label for="release_year">Año</label>
        <input type="text" name="release_year" id="release_year" value={{$anime->release_year}}>
        <label for="episodes">Episodios</label>
        <input type="text" name="episodes" id="episodes"value={{$anime->episodes}}>
        <label for="rating">Puntuacion</label>
        <input type="text" name="rating" id="rating" value={{$anime->rating}}>

        <select name="studio">
            <option value=""> Selecciona un Estudio</option>
            @foreach ($studios as $studio)
                <option> {{$studio->name}} </option>

            @endforeach

        </select>
        <input type="file" name="image">
        <input type="submit" name="submit" id="submit">
    </form>

@endsection
