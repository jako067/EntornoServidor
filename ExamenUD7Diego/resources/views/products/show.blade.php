@extends('layout.layout')

@section('title','index')

@section('content')

@if ($product->available)

Nombre: {{$product->name}} <br>
Marca: {{$product->brand}}<br>
Descipción: {{$product->description}}<br>
Precio: {{$product->price}}<br>
Stock: {{$product->stock}}<br>
Imagen: <img src="/storage/{{$product->img}}" alt="imagen usu"><br>

@else

No quedan disponibles

@endif






@endsection
