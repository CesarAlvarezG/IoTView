@extends('layouts.app')

@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Editar controlador PID</h1>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    {!! Form::model($data, [
    'method' => 'PUT',
    'route' => ['pids.update', $data->id]
    ]) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('Kp', 'Kp:', ['class' => 'control-label']) !!}
                {!! Form::number('Kp',$data->valor  ,['step'=>"0.0000001",'required'=>'autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Ki', 'Ki:', ['class' => 'control-label']) !!}
                {!! Form::number('Ki',$data->valor  ,['step'=>"0.0000001",'required'=>'autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Kd', 'Kd:', ['class' => 'control-label']) !!}
                {!! Form::number('Kd',$data->valor  ,['step'=>"0.0000000001",'required'=>'autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Ts', 'Ts:', ['class' => 'control-label']) !!}
                {!! Form::number('Ts',$data->valor  ,['step'=>"0.0000001",'required'=>'autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('sensor_id','Sensor' , ['class' => 'control-label']) !!}
                <select name="sensor_id">
                    @foreach($sensores as $sensor)
                            <option value='{{$sensor->id}}'>{{ $sensor->Nombre }} ID:{{$sensor->id}}</option>
                    @endforeach
                </select>
                <p>Sensor actual: {{ $data->sensor_id }}</p>
            </div>
            <div class="box-footer">
                {!! Form::submit('Actualizar control PID', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <a href="{{ route('pids.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
            </div>
        </div>
    </div>
</section>
@stop
