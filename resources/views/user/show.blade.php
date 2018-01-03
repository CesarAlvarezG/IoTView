@extends('layouts.app')

@section('content')


<h1>{{ $data->name }}</h1>
<p class="lead">Usuario</p>

<table class="table table-striped table-hover">

<tr>
    <td style="width: 200px;">Email</td>
    <td>{{ $data->email }}</td>
</tr>
<tr>
    <td>Dirección</td>
    <td>{{ $data->Direccion }}</td>
</tr>
<tr>
    <td>Rol</td>
    <td>{{ $data->role }}</td>
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

<a href="{{ route('users.edit', $data->id) }}" class="btn btn-primary">Editar usuario</a>

{!! Form::open([
    'method' => 'DELETE',
    'route' => ['users.destroy', $data->id]
]) !!}

{!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}

<a href="{{ route('users.index') }}" class="btn btn-info">Volver a todos los usuarios</a>
@stop
