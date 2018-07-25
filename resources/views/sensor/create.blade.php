


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
    {!! Form::open(['route' => 'sensors.store']) !!}
<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
    {!! Form::label('Nombre', 'Tipo de señal', ['class' => 'control-label']) !!}
    {!! Form::select('Tipo', ['Sensor' => 'Sensor', 'Actuador' => 'Actuador'], 'Sensor'); !!}
    <p></p>
    {!! Form::label('NVar', 'Nombre de variable', ['class' => 'control-label']) !!}
    {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
    {!! Form::label('Var', 'Variable:', ['class' => 'control-label']) !!}
    {!! Form::number('Var','0.0',['step'=>"0.01",'required'=>'autofocus']) !!}
    <p></p>
    {!! Form::label('NMensaje', 'Nombre del mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('NMensaje', null, ['class' => 'form-control']) !!}
    {!! Form::label('Mensaje', 'Mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('Mensaje', null, ['class' => 'form-control']) !!}
    {!! Form::label('Confirmacion','Token' , ['class' => 'control-label']) !!}
    {!! Form::text('Confirmacion', $token, ['class' => 'control-label']) !!}
    <p>Sistema:</p>
    <select name="sistema_id">
        @foreach($sistemas as $sistema)
                <option value='{{$sistema->id}}'>{{ $sistema->Nombre }} ID:{{$sistema->id}}</option>
        @endforeach
    </select>
</div>
{!! Form::submit('Crear un nuevo sensor', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
