<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.layout')
    @section('body')
    Información de la película

    <h2>{{$movie->year}} <br>{{$movie->title}}
    <br>{{$movie->plot}}
    <br>Puntuación: {{$movie->rating}}</h2>
    <br>
    @endsection
</body>
</html>
