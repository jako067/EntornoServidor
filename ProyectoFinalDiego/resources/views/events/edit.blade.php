@extends('layout.layout')

@section('title')
    Eventos
@endsection

@section('body')
    <h1> Añada su Evento: </h1>

    <form action="{{ route('events.update', $event) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre de su evento: </label>
        <input type="text" name="name" id="name" value="{{ old('name') ?? $event->name }}">
        <br>
        @error('name')
            <br> Error: {{ $message }}
        @enderror <br>
        <label for="descripton">Descripción </label>
        <input type="text" name="description" id="description" value="{{ old('description') ?? $event->description }}">
        <br>
        @error('description')
            <br> Error: {{ $message }}
        @enderror <br>
        <label for="location">Ubicación: </label>
        <input type="text" name="location" id="location" value="{{ old('location') ?? $event->location }}">
        <br>
        @error('location')
            <br> Error: {{ $message }}
        @enderror <br>
        <label for="map">Mapa: </label>
        <input type="text" name="map" id="map" value="{{ old('map') ?? $event->map }}">
        <br>
        @error('map')
            <br> Error: {{ $message }}
        @enderror <br>
        <label for="date">Fecha: </label>
        <input type="date" name="date" id="date" value="{{ old('date') ?? $event->date }}">
        <br>
        @error('date')
            <br> Error: {{ $message }}
        @enderror <br>
        <label for="hour">Hora: </label>
        <input type="time" name="hour" id="hour" value="{{ old('hour') ?? $event->hour }}">
        <br>
        @error('hour')
            <br> Error: {{ $message }}
        @enderror <br>
        <select name="type">
            <option value="official">Oficial</option>
            <option value="exhibition"> Exibición</option>
            <option value="charity">Caridad</option>
        </select>
        <br>
        <label for="tag">Etiqueta: </label>
        <input type="text" name="tag" id="tag" value="{{ old('tag') ?? $event->tag }}">
        <br>
        @error('tag')
            <br> Error: {{ $message }}
        @enderror <br>
        <label for="visible">Visible: </label>
        <input type="checkbox" name="visible" value="1" {{ old('visible', $event->visible) ? 'checked' : '' }}>
        <br>
        <input type="submit" value="enviar">
    </form>
@endsection
