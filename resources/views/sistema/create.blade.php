@extends('layouts.app')


@section('content')
@if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif


<h1>Agregar un nuevo sistema</h1>
<p class="lead">Inserte la información del nuevo sistema.</p>
<hr>
    {!! Form::open(['route' => 'sistemas.store']) !!}
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Descripcion', 'Descripción', ['class' => 'control-label']) !!}
    {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('NVar', 'Nombre de variable', ['class' => 'control-label']) !!}
    {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
</div>
Valor variable:
    {!! Form::number('Var','0.0',['step'=>"0.01",'required'=>'autofocus']) !!}
<div class="form-group">
    {!! Form::label('NMensaje', 'Nombre del mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('NMensaje', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Mensaje', 'Mensaje del sistema', ['class' => 'control-label']) !!}
    {!! Form::text('Mensaje', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Crear un nuevo sistema', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
