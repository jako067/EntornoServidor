@extends('layout.layout')

@section('title','animes')

@section('body')

@forelse ($animes as $anime)

    <a href="{{route('animes.show',$anime)}}"> <h2>{{$anime->title}}</h2></a>
    <h2>Puntuación: {{$anime->rating}}</h2>
    <h2>Tiene manga?: @if($anime->has_manga==1)Sipi

    @else Nopi
    @endif</h2>
    <h2>Año de salida: {{$anime->release_year}}</h2>

    <form action="{{ route('animes.destroy', $anime)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value='Eliminar anime'>
    </form>

    @empty
    No hay animes;
    @endforelse

    {{ $animes->links()}}
@endsection
