@extends('layout.layout')
@section('body')
    <form action="{{ route('characters.update', $character) }}" method="post">

        @csrf
        @method('put')

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"    value="{{old ('name') ?? $character->name}}">
        <label for="age">age</label>
        <input type="text" name="age" id="age" value="{{old ('age') ?? $character->age}}">
        <label for="gender">Gender</label>
        <input type="text" name="gender" id="gender"     value="{{old ('gender') ?? $character->gender}}">
        <label for="role">Role</label>
        <input type="text" name="role" id="role"     value="{{old ('role') ?? $character->role}}">

        <input type="submit" name="submit" id="submit" value="guardar character">

    </form>
@endsection
