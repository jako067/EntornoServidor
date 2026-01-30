@extends('layout.layout')

@section('title', 'reserva')
@section('body')

    <form>



        <br>
        <label for="date">Fecha</label>
        <input type="date" name="date">
        <br>
        <label for="time">Hora</label>
        <input type="time" name="time">
        <br>
        <label for="minuts">Minutos</label>
        <input type="text" name="minuts">
        <br>
        <label for="select">Espacio</label>
        <select id="select" name="select">
            @forelse ($spaces as $space)
                <option>{{ $space->flat }}</option>

            @empty
            @endforelse
        </select>
        <br>
        <label for="select2">Cliente</label>
        <select id="select2" name="select2">
            @forelse ($customers as $customer)
                <option>{{ $customer->name }}</option>

            @empty
            @endforelse

        </select>
        <br>
        <input type="submit" value="Enviar">

    </form>
@endsection
