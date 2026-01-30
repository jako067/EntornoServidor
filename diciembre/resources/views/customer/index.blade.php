@extends('layout.layout')

@section('title','create')

@section('body')

@forelse ($customers as $customer)

    <a href="{{route('customer.show',$customer)}}"> <h2>{{$customer->name}}</h2></a>

    @empty
    No hay Clientes;

@endforelse

@endsection
