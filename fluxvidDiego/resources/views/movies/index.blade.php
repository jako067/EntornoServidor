
    @extends('layout.layout')
    @section('body')

    <h1>Disfruta de estas películas: </h1>

    @each('movies.movie',$peliculasTerror, 'pelicula', 'movies.nomovies')
    @endsection

