<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        <a href="{{ route('index') }}"> Principal</a>
        <a href="{{ route('subjects.index') }}"> Ver asignaturas</a>
        <a href="{{ route('subjects.show', $subject = 33) }}"> Ver asignatura 33</a>
        <a href="{{ route('subjects.create') }}"> Añadir asignatura</a>
    </nav>
    <br>
    @yield('content')
    <br>
    <footer>
        <a href="{{ route('cookies') }}"> Politica de cookies</a>
        <a href="{{ route('privacy') }}"> Privacidad</a>
    </footer>

</body>

</html>
