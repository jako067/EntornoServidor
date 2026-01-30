@extends('layout.layout')
@section('title','clientes')
@section('body')

    @if ($errors->any())
        Hay errores en el formulario: <br>
        @foreach ( $errors->all() as $error )
            {{$error}} <br>
        @endforeach
    @endif

     <form method="post" action="{{route('customer.store')}}">
        @csrf
        <label for="active">Activo?</label>
        <input type="checkbox" name="active" id="active" value="0">
        <label for="email">Email </label>
        <input type="email" name="email" id="email">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="surname1">Apellido 1</label>
        <input type="text" name="surname1" id="surname1">
        <label for="surname2">Apellido2</label>
        <input type="text" name="surname2" id="surname2">
        <label for="dni">DNI</label>
        <input type="text" name="dni" id="dni">
        <input type="submit" name="submit" id="submit" value="enviar">
    </form>
@endsection
