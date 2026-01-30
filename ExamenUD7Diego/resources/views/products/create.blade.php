@extends('layout.layout')

@section('title','index')

@section('content')


<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name"> Nombre: </label>
    <input type="text" name="name" id="name" class="name">

    <label for="brand"> Marca: </label>
    <input type="text" name="brand" id="brand" class="brand">

    <label for="description"> Descripción: </label>
    <input type="text" name="description" id="description" class="description">

    <label for="price"> Precio: </label>
    <input type="text" name="price" id="price" class="price">

    <label for="stock"> Stock: </label>
    <input type="text" name="stock" id="stock" class="stock">

    <label for="available"> Available: </label>
    <input type="checkbox" name="available" id="available" class="available">

    <label for="img"> Imagen: </label>
    <input type="file" name="img" id="img" class="img">

    <input type="submit" value="submit">

</form>

@endsection
