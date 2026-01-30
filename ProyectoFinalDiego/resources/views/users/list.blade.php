@extends('layout.layout')
@section('title', 'Lista usuarios')

@section('body')


    @forelse ($users as $user)
        {{ $user->name }}

    @empty
    @endforelse

@endsection
