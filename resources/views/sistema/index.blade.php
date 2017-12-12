@extends('layouts.app')


@section('content')


    <h1>Listado de sistemas</h1>
    <p class="lead">Lista de todos los sistemas creados.
    <a href="{!! url('sistemas/create') !!}">Agregar un nuevo sistema?</a></p>
    <hr>
    @foreach($list as $sistema)
        <h3>{{ $sistema->Nombre }}</h3>
        <p>{{ $sistema->Descripcion }}</p>
        <p>
        <a href="{{ route('sistemas.show', $sistema->id) }}" class="btn btn-primary">Ver Sistema</a>
        <a href="{{ route('sistemas.edit', $sistema->id) }}" class="btn btn-primary">Editar Sistema</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['sistemas.destroy', $sistema->id]
        ]) !!}
        {!! Form::submit('Borrar este sistema?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
