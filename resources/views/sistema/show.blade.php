@extends('layouts.app')

@section('content')


<h1>{{ $data->Nombre }}</h1>
<p class="lead">Sistema</p>

<table class="table table-striped table-hover">

<tr>
    <td style="width: 200px;">Descripción</td>
    <td>{{ $data->Descripcion }}</td>
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

<a href="{{ route('sistemas.edit', $data->id) }}" class="btn btn-primary">Editar sistema</a>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['sistemas.destroy', $data->id]
]) !!}

{!! Form::submit('Borrar este sistema?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a href="{{ route('sistemas.index') }}" class="btn btn-info">Volver a todos los sistemas</a>
@stop
