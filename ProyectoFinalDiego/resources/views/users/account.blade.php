@extends('layout.layout')

@section('title', 'account')

@section('body')

    {{ Auth::user()->name }}
    {{ Auth::user()->username }}
    {{ Auth::user()->email }}
    Esto es el show
@endsection
