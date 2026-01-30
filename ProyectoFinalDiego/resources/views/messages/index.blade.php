@extends('layout.layout')

@section('title')

Contact
@endsection

@section('body')

Aquí apareceran los mensajes
 @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ( $errors->all() as $error )
            {{$error}} <br>
        @endforeach
    @endif

    <form method="post" action="{{route('messages.store',$message)}}">
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
