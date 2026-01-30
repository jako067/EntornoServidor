@extends('layout.layout')
@section('body')
    Create

    @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ( $errors->all() as $error )
            {{$error}} <br>
        @endforeach
    @endif

    <form method="post" action="{{route('actors.store')}}">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="nationality">Nacionalidad</label>
        <input type="text" name="nationality" id="nationality">
        <label for="born">Fecha de nacimiento</label>
        <input type="text" name="born" id="born">

        <input type="submit" name="submit" id="submit">


    </form>

@endsection
