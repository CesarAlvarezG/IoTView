@extends('layouts.app')


@section('content')


<h1>Agregar un nuevo sistema</h1>
<p class="lead">Inserte la información del nuevo sistema.</p>
<hr>
    {!! Form::open(['route' => 'sistemas.store']) !!}
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Descripcion', 'Descripcion', ['class' => 'control-label']) !!}
    {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Crear un nuevo sistema', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
