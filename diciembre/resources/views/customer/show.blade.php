@extends('layout.layout')
@section('title','create')
@section('body')
    {{$customer->name}} {{$customer->surname1}}{{$customer->surname2}}{{$customer->dni}}
@endsection
