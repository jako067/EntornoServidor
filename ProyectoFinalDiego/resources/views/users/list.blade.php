@extends('layout.layout')
@section('title', 'Lista usuarios')

@section('body')


    @forelse ($users as $user)
        {{ $user->name }}<br>
        {{ $user->email }}<br>
        {{ $user->date }}<br>
        {{ $user->rol }}<br>
         <img src="/storage/{{ $user->photo }}"alt="Foto de {{ $user->name }} " width="200">

    @empty
    @endforelse

@endsection
