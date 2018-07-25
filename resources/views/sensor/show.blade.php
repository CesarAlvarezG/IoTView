@extends('layouts.app')

@section('content')


<h1>{{ $data->Nombre }}</h1>
<p class="lead">Sensor</p>

<table class="table table-striped table-hover">

<tr>
    <td style="width: 200px;">Tipo de medida</td>
    <td>{{ $data->Tipo }}</td>
</tr>
<tr>
    <td style="width: 200px;">Código del sensor</td>
    <td>{{ $data->id }}</td>
</tr>
<tr>
    <td>Tipo de señal</td>
    <td>{{ $data->Tipo }}</td>
</tr>
<tr>
    <td>Token</td>
    <td>{{ $data->Confirmacion }}</td>
</tr>
<tr>
    <td>Nombre de la variable</td>
    <td>{{ $data->NVar}}</td>
</tr>
<tr>
    <td>Valor de la variable</td>
    <td>{{ $data->Var }}</td>
</tr>
<tr>
    <td>Nombre del mensaje</td>
    <td>{{ $data->NMensaje }}</td>
</tr>
<tr>
    <td>Mensaje</td>
    <td>{{ $data->Mensaje }}</td>
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

<a href="{{ route('sensors.edit', $data->id) }}" class="btn btn-primary">Editar sensor</a>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['sensors.destroy', $data->id]
]) !!}

{!! Form::submit('Borrar este sensor?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a href="{{ route('sensors.index') }}" class="btn btn-info">Volver a todos los sensores</a>
@stop
