@extends('layouts.app')


@section('content')


    <h1>Listado de controles PID</h1>
    <p class="lead">Lista de todos los controles PID creados.
    <a href="{!! url('pids/create') !!}">Agregar una nuevo control PID?</a></p>
    <hr>
    @foreach($list as $pid)
        <p>Kp: {{ $pid->Kp }}</p>
        <p>Ki: {{ $pid->Ki }}</p>
        <p>Kd: {{ $pid->Kd }}</p>
        <p>Ts: {{ $pid->Ts }}</p>
        <p>SetPoint: {{ $pid->SetPoint }}</p>
        <p>Sensor: {{ $pid->sensor_id }}</p>
        <p>
        <a href="{{ route('pids.show', $pid->id) }}" class="btn btn-primary">Ver control PID</a>
        <a href="{{ route('pids.edit', $pid->id) }}" class="btn btn-primary">Editar control PID</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['pids.destroy', $pid->id]
        ]) !!}
        {!! Form::submit('Borrar este control PID?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
