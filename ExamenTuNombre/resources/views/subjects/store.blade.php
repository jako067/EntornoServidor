@extends('layout.layout')

@section('title','guardado')

@section('content')

    Asignatura guardada con exito jajaj:

    Nombre de la asignatura:{{($subject['name'])}}
    Año escolar de la asignatura:{{$subject['year']}}
    Codigo de la asignatura:{{$subject['code']}}
    Ciclo de la asignatura:{{$subject['cycle']}}


    {{--Por algun motivo no se están guardando los valores correctamente en $subject--}}
@endsection


