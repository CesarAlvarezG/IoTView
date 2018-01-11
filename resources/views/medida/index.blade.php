@extends('layouts.app')


@section('content')


    <h1>Listado de medidas</h1>
    <p class="lead">Lista de todos las medidas creadas.
    <a href="{!! url('medidas/create') !!}">Agregar una nueva medida?</a></p>
    <hr>
    @foreach($list as $medida)
        <p>Valor: {{ $medida->valor }}</p>
        <p>Sensor: {{ $medida->sensor_id }}</p>
        <p>
        <a href="{{ route('medidas.show', $medida->id) }}" class="btn btn-primary">Ver Medida</a>
        <a href="{{ route('medidas.edit', $medida->id) }}" class="btn btn-primary">Editar Medida</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['medidas.destroy', $medida->id]
        ]) !!}
        {!! Form::submit('Borrar esta medida?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
