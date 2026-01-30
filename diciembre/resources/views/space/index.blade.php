@extends('layout.layout')

@section('title','create')

@section('body')

@forelse ($spaces as $space)

    <a href="{{route('space.show',$space)}}"> <h2>{{$space->flat}}</h2></a>

    @empty
    No hay Espacios;

@endforelse

@endsection
