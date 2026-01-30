@extends('layout.layout')
@section('body')
    Create
    @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ( $errors->all() as $error )
            {{$error}} <br>
        @endforeach
    @endif

    <form method="post" action="{{route('characters.store')}}">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" >
        <label for="age">age</label>
        <input type="text" name="age" id="age">
        <label for="gender">genero</label>
        <input type="text" name="gender" id="gender">
        <label for="role">rolo</label>
        <input type="text" name="role" id="role">
        <label for="studio_id">IDEstudio</label>
        <input type="text" name="studio_id" id="studio_id">

        <input type="submit" name="submit" id="submit">

    </form>

@endsection
