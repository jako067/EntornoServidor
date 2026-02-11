@extends('layout.layout')
@section('title', 'Lista usuarios')

@section('body')


    @forelse ($users as $user)
        <div style="padding:30px;
        background:#b4f6d8;
        margin:10px;
        border-radius:12px;
        line-height:1.8;">
            {{ $user->name }}<br>
            {{ $user->email }}<br>
            {{ $user->date }}<br>
            {{ $user->rol }}<br>
            <img src="/storage/{{ $user->photo }}"alt="Foto de {{ $user->name }} " width="200">
        </div>
    @empty
        No hay usuarios
    @endforelse

@endsection
