<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
        @auth
            Bienvenido {{Auth::user()->name}} -
            <a href=" {{route ("users.account")}}"> Tu cuenta</a>
            <a href=" {{route ("logout")}}"> Salir</a>
        @else

        <a href=" {{route('loginForm')}}"> Logueate</a>
        <a href=" {{route ("signupForm")}}"> Regístrate</a>
        @endauth

        @auth

        @if (Auth::user()->rol=='admin')

        <a href="{{route('users.list')}}"> ver usuarios</a>

        @endif

        @endauth

    </header>

</body>
</html>
