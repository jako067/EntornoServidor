@extends('layout.layout')
@section('body')

<div>
   aqui puedes ver la pelicula
</div>
    {{$id}}


    <li> <a href="{{route('actors.edit', $id)}}"> Edita el actor con el id</a></li>
@endsection
