@extends('layout.layout')
@section('title', 'subjects/create')
@section('content')

    Formulario:

    @if ($errors->any())

        Hay errores en el formulario: <br>
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach

    @endif
    <form action="{{ route('subjects.store') }}" method="post">
        @csrf
        <label for="name">Introduzca el nombre de la asignatura: </label>
        <input type="text" id="name" class="name">
        <br>
        <label for="code">Introduzca el codigo: </label>
        <input type="text" id="code" class="code">
        <br>
        <label for="cycle">Introduzca el ciclo: </label>
        <input type="text" id="cycle" class="cycle">
        <br>
        <label for="year">Introduzca el año: </label>
        <input type="text" id="year" class="year">
        <br>

        <input type="submit" value="enviar">

    </form>
@endsection
