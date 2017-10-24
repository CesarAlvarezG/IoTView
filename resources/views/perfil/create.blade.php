@extends('layouts.app')

@section('content')

    <h1>Agregar un nuevo Perfil</h1>
    <p class="lead">Ingrese la información del nuevo perfil.</p>
    <hr>
    {!! Form::open(['route' => 'perfiles.store']) !!}
    <div class="form-group">
    {!! Form::label('Tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::text('Tipo', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('Direccion', 'Email', ['class' => 'control-label']) !!}
    {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
    </div>
    </div>
    {!! Form::submit('Crear un nuevo perfil', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
