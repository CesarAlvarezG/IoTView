@extends('layouts.app')

@section('content')



<p class="lead">Valor</p>
<h2>{{ $data->valor }}</h2>
<table class="table table-striped table-hover">

<tr>
    <td>Sensor</td>
    <td>{{ $sensor->Nombre }}</td>
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

<a href="{{ route('medidas.edit', $data->id) }}" class="btn btn-primary">Editar medida</a>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['medidas.destroy', $data->id]
]) !!}

{!! Form::submit('Borrar esta medida?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a href="{{ route('medidas.index') }}" class="btn btn-info">Volver a todas las medidas</a>
@stop
