@extends('layouts.app')


@section('content')


    <h1>Listado de sensores</h1>
    <p class="lead">Lista de todos los sensores creados.
    <a href="{!! url('sensores/create') !!}">Agregar un nuevo sensor?</a></p>
    <hr>
    @foreach($list as $sensor)
        <h3>{{ $sensor->Nombre }}</h3>
        <p>{{ $sensor->Tipo }}</p>
        <p>{{ $sensor->Direccion }}</p>
        <p>
        <a href="{{ route('sensores.show', $sensor->id) }}" class="btn btn-primary">Ver Sensor</a>
        <a href="{{ route('sensores.edit', $sensor->id) }}" class="btn btn-primary">Editar Sensor</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['sensores.destroy', $sensor->id]
        ]) !!}
        {!! Form::submit('Borrar este sensor?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
