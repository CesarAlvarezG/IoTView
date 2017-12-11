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
<p class="lead">Inserte la información de la nueva medida.</p>
<hr>
    {!! Form::open(['route' => 'medidas.store']) !!}
<div class="form-group">
    {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::number('name', 'valor') !!}
</div>
{!! Form::submit('Crear una nueva medida', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
