@extends('layouts.app')

@section('title','Pagina Publica')

@section('headspace')


@endsection


@section('sidebar')


    <p>Este es el texto de la barra lateral</p>

@endsection


@section('content')

    <p>La medida mas reciente es:</p>

        <strong> {{$medida->valor}}</strong>

@endsection
