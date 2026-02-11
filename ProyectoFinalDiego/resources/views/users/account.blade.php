@extends('layout.layout')

@section('title', 'account')

@section('body')
    <div style="padding:30px;
        background:#54eea9;
        border-radius:12px;
        line-height:1.8;">
        Nombre: {{ Auth::user()->name }}
        <br>
        Nombre de usuario: {{ Auth::user()->username }}
        <br>
        Email: {{ Auth::user()->email }}
        <br>
        <img src="/storage/{{ Auth::user()->photo }}"alt="Foto de {{ Auth::user()->name }} " width="200">
        <br>

        <div style="display: inline">
            <form action="{{ route('user.destroy')}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="eliminar">
            </form>
        </div>
    @endsection
