<header>
    <h1>Levante Volei</h1>
    @if (Auth::user())
        <h2>{{ Auth::user()->name }}</h2>
        <a href="{{ route('logout') }}"> Salir </a>
        <a href="{{ route('users.account') }}"> Cuenta </a>
    @else
        <a href="{{ route('login') }}"> Loguearte</a>
        <a href="{{ route('signup') }}"> Signup</a>
    @endif
    <nav>

        <a href="{{ route('index') }}"> Índice </a>
        <a href="{{ route('players.index') }}"> Jugadores </a>
        <a href="{{ route('events.index') }}"> Eventos </a>
        <a href="{{ route('shop') }}"> Tienda </a>
        <a href="{{ route('messages.create') }}"> Contacto </a>
        <a href="{{ route('where')}}"> Donde Estamos </a>
        @isadmin
        <a href="{{ route('messages.index') }}"> Mensajes </a>
        <a href="{{ route('players.create') }}">Añadir Jugador</a>
        <a href="{{ route('events.create') }}">Añadir Evento</a>
        <a href="{{ route('users.list') }}"> Lista Usuarios</a>
        @endisadmin


    </nav>
</header>
