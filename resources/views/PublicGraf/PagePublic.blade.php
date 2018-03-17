@extends('layouts.app')

@section('title','Pagina Publica')

@section('headspace')


@endsection


@section('sidebar')


     <a href="{{url('/')}}">IotView</a>

@endsection


@section('content')
<p>Los sistemas actuales son:</p>

    @foreach($sistemas as $sistema)
        <h1 align="center">{{$sistema->Nombre}}</h1>
        <p>{{$sistema->Descripcion}}</p>
        <p>Codigo: {{$sistema->id}}</p>
    @endforeach
@endsection
