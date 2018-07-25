@extends('layouts.app')


@section('content')


    <h1>Listado de sensores</h1>
    <p class="lead">Lista de todos los sensores creados.
    <a href="{!! url('sensors/create') !!}">Agregar un nuevo sensor?</a></p>
    <hr>
    @foreach($list as $sensor)
        <h2>{{ $sensor->Nombre }}</h2>
        <h4>Tipo de señal:</h4><em>{{ $sensor->Tipo }}</em>
        <h4>Nombre de la variable:</h4><em>{{ $sensor->NVar }}</em>
        <h4>Valor de la variable:</h4> <em>{{ $sensor->Var }}</em>
        <h4>Nombre del mensaje:</h4> <em>{{ $sensor->NMensaje }}</em>
        <h4>Mensaje:</h4> <em>{{ $sensor->Mensaje }}</em>
        <h4>Token:</h4>
        <em>{{ $sensor->Confirmacion }}</em>
        <p>
        <a href="{{ route('sensors.show', $sensor->id) }}" class="btn btn-primary">Ver Sensor</a>
        <a href="{{ route('sensors.edit', $sensor->id) }}" class="btn btn-primary">Editar Sensor</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['sensors.destroy', $sensor->id]
        ]) !!}
        {!! Form::submit('Borrar este sensor?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
