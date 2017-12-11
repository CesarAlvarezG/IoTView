@extends('layouts.app')


@section('content')
@if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif


<h1>Agregar un nuevo sensor</h1>
<p class="lead">Inserte la información del nuevo sensor.</p>
<hr>
    {!! Form::open(['route' => 'sensores.store']) !!}
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Crear un nuevo sensor', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
