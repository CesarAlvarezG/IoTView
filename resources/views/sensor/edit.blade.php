@extends('layouts.app')
@section('content')


<h1>Editar sensor</h1>
<p class="lead">Editar este sensor.
<a href="{{ route('sensors.index') }}">Regresar a todos los sensores.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($data, [
    'method' => 'PUT',
    'route' => ['sensors.update', $data->id]
]) !!}

<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::select('Tipo', ['Continuo' => 'Continuo', 'Discreto' => 'Discreto']); !!}
    {!! Form::select('Tipo', ['Sensor' => 'Sensor', 'Actuador' => 'Actuador']); !!}
<p></p>
    {!! Form::label('NVar', 'Nombre de variable', ['class' => 'control-label']) !!}
    {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
    {!! Form::label('Var', 'Variable:', ['class' => 'control-label']) !!}
    {!! Form::number('Var',null,['step'=>"0.01",'required'=>'autofocus']) !!}
    <p></p>
    {!! Form::label('NMensaje', 'Nombre del mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('NMensaje', null, ['class' => 'form-control']) !!}
    {!! Form::label('Mensaje', 'Mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('Mensaje', null, ['class' => 'form-control']) !!}
    {!! Form::label('Confirmacion','Token' , ['class' => 'control-label']) !!}
    {!! Form::text('Confirmacion',null, ['class' => 'control-label']) !!}
    <p>Sistema: {{ $data->sistema_id }}</p>
    <select name="sistema_id">
        @foreach($sistemas as $sistema)
                <option value='{{$sistema->id}}'>{{ $sistema->Nombre }} ID:{{$sistema->id}}</option>
        @endforeach
    </select>

</div>
{!! Form::submit('Actualizar sistema', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
