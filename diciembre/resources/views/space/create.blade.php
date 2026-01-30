@extends('layout.layout')
@section('title','create')
@section('body')

@if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ( $errors->all() as $error )
            {{$error}} <br>
        @endforeach
    @endif
     <form method="post" action="{{route('space.store') }}">
        @csrf
        <label for="flat">Edificio</label>
        <input type="text" name="flat" id="flat">
        <label for="building">Piso </label>
        <input type="text" name="building" id="building">
        <label for="code">Codigo</label>
        <input type="text" name="code" id="code">

        <input type="submit" name="submit" id="submit" value="enviar">
    </form>
@endsection
