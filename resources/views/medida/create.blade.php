@extends('layouts.app')

@section('headspace')
@stop


@section('content')



<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Agregar una nueva medida</h1>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    {!! Form::open(['route' => 'medidas.store']) !!}

        <div class="box-body">
            <div class="form-group">
            {!! Form::label('valor', 'Valor', ['class' => 'control-label']) !!}
            {!! Form::number('valor','0.0',['step'=>"0.01",'required'=>'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Sensor_id', 'Sensor', ['class' => 'control-label']) !!}
            <select name="sensor_id">
                @foreach($sensores as $sensor)
                    <option value="{{$sensor->id}}">{{ $sensor->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="box-footer">
            {!! Form::submit('Crear una nueva medida', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        </div>
    </div>
@stop
