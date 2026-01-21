@extends('layout.layout')

@section('title')
    Eventos
@endsection

@section('body')
    <h1> Añada su Evento: </h1>

    <form action="{{ route('events.store') }}" method="post">
        @csrf

        <label for="name">Nombre de su evento: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="descripton">Descripción </label>
        <input type="text" name="description" id="description">
        <br>
        <label for="location">Ubicación: </label>
        <input type="text" name="location" id="location">
        <br>
        <label for="map">Mapa: </label>
        <input type="text" name="map" id="map">
        <br>
        <label for="date">Fecha: </label>
        <input type="date" name="date" id="date">
        <br>
        <label for="hour">Hora: </label>
        <input type="time" name="hour" id="hour">
        <br>
        <select name="type">
            <option value="official">Oficial</option>
            <option value="exhibition"> Exibición</option>
            <option value="charity">Caridad</option>
        </select>
        <br>
        <label for="tag">Etiqueta: </label>
        <input type="text" name="tag" id="tag">
        <br>
        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" id="visible">
        <br>
        <input type="submit" value="enviar">
    </form>
@endsection
