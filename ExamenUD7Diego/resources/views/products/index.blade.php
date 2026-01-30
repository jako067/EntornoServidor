@extends('layout.layout')

@section('title','index')

@section('content')

<h1>Listado de Productos</h1>

@forelse ($products as $product)

    <a href="{{route('product.show',$product)}}">{{$product->name}}</a>
    {{$product->price}}
    <br>

    <a href="{{route('product.edit',$product)}}">Editar</a>

    <form action="{{route('product.destroy', $product)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar libro">
    </form>

@empty

No hay productos

@endforelse

@endsection
