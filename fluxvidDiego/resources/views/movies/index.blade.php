
    @extends('layout.layout')

    @section('title','movies')
    @section('body')

    <h1>Disfruta de estas películas: </h1>

    @forelse ( $movies as $movie )


        <a href="{{route('movies.show',$movie)}}"> <h2>{{$movie->title}}</h2></a>


    @empty
    No hay peliculas;

    @endforelse
    @endsection

