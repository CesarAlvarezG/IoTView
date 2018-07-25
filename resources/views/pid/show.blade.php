@extends('layouts.app')

@section('content')



<table class="table table-striped table-hover">
<h1>Controlador PID </h1>
    <h2>ID: {{$data->id}}</h1></h2>
<tr>
    <td>Kp</td>
    <td>{{ $data->Kp }}</td>
</tr>
<tr>
    <td>Ki</td>
    <td>{{ $data->Ki }}</td>
</tr>
<tr>
    <td>Kd</td>
    <td>{{ $data->Kd }}</td>
</tr>
<tr>
    <td>Ts</td>
    <td>{{ $data->Ts }}</td>
</tr>
<tr>
    <td>SetPoint</td>
    <td>{{ $data->SetPoint }}</td>
</tr>
<tr>
    <td>Sensor</td>
    <td>{{ $data->sensor_id }}</td>
</tr>


<tr>
    <td>Created At</td>
    <td>{{ $data->created_at }}</td>
</tr>
<tr>
    <td>Updated At</td>
    <td>{{ $data->updated_at }}</td>
</tr>
</table>

<hr>

<a href="{{ route('pids.edit', $data->id) }}" class="btn btn-primary">Editar controlador PID</a>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['pids.destroy', $data->id]
]) !!}

{!! Form::submit('Borrar este?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a href="{{ route('pids.index') }}" class="btn btn-info">Volver a todos los controladores PID</a>
@stop
