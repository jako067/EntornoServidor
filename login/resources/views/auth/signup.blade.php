<h1>Registrate</h1>

<form action="{{route('signup')}}" method ="post">
    @csrf

    <label for="username"> Nombre de usuario: </label> <br>
    <input type="text" name="username" id="username" value="{{old('username')}}"><br>
    @error('username') <br> Error: {{ $message }} @enderror <br>

    <label for="name"> Nombre complet: </label> <br>
    <input type="text" name="name" id="name" value="{{old('name')}}"><br>
    @error('name') <br> Error: {{ $message }} @enderror <br>

    <label for="email"> Email: </label> <br>
    <input type="text" name="email" id="email" value="{{old('email')}}"><br>
    @error('email') <br> Error: {{ $message }} @enderror <br>

    <label for="password"> Contraseña: </label> <br>
    <input type="text" name="password" id="password" value="{{old('password')}}"><br>
    @error('password') <br> Error: {{ $message }} @enderror <br>

    <label for="password_confirmation"> Repite la contraseña: </label> <br>
    <input type="text" name="password_confirmation" id="password_confirmation" value="{{old('password_confirmation')}}"><br>
    @error('password_confirmation') <br> Error: {{ $message }} @enderror <br>

    <input type="submit" value="Enviar">

</form>
