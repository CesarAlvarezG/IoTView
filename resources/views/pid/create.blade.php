@extends('layouts.app')

@section('headspace')

@stop


@section('content')



<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Agregar un nuevo controlador PID</h1>
            <p>Inserte la información del nuevo controlador PID.</p>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    {!! Form::open(['route' => 'pids.store']) !!}

        <div class="box-body">
            <div class="form-group">
            {!! Form::label('Kp', 'Kp:', ['class' => 'control-label']) !!}
            {!! Form::number('Kp','1.0',['step'=>"0.0000001",'required'=>'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Ki', 'Ki:', ['class' => 'control-label']) !!}
            {!! Form::number('Ki','0.0',['step'=>"0.0000001",'required'=>'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Kd', 'Kd:', ['class' => 'control-label']) !!}
            {!! Form::number('Kd','0.0',['step'=>"0.0000001",'required'=>'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Ts', 'Tiempo muestreo:', ['class' => 'control-label']) !!}
            {!! Form::number('Ts','1.0',['step'=>"0.0000001",'required'=>'autofocus']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('SetPoint', 'SetPoint:', ['class' => 'control-label']) !!}
            {!! Form::number('SetPoint','1.0',['step'=>"0.0000001",'required'=>'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sensor_id','Sensor:' , ['class' => 'control-label']) !!}
            <select name="sensor_id">
                @foreach($sensores as $sensor)
                        <option value="{{$sensor->id}}">{{ $sensor->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="box-footer">
            {!! Form::submit('Crear un nuevo control PID', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        </div>
    </div>
@stop
