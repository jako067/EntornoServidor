@extends('layout.layout')

@section('title','edit')

@section('content')


<form action="{{route('product.update',$product)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="name"> Nombre: </label>
    <input type="text" name="name" id="name" class="name" value="{{$product->name}}">

    <label for="brand"> Marca: </label>
    <input type="text" name="brand" id="brand" class="brand" value="{{$product->brand}}">

    <label for="description"> Descripción: </label>
    <input type="text" name="description" id="description" class="description" value="{{$product->description}}">

    <label for="price"> Precio: </label>
    <input type="text" name="price" id="price" class="price" value="{{$product->price}}">

    <label for="stock"> Stock: </label>
    <input type="text" name="stock" id="stock" class="stock" value="{{$product->stock}}">

    <label for="available"> Available: </label>
    <input type="checkbox" name="available" id="available" class="available" value="{{$product->available}}">

    <label for="img"> Imagen: </label>
    <input type="file" name="img" id="img" class="img" value="{{$product->img}}">

    <input type="submit" value="submit">

</form>

@endsection
