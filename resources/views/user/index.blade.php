@extends('layouts.app')


@section('content')


    <h1>Listado de usuarios</h1>
    <p class="lead">Lista de todos los usuarios registrados.
    <a href="{!! url('users/create') !!}">Agregar un nuevo usuario?</a></p>
    <hr>
    @foreach($list as $user)
        <h3>{{ $user->name }}</h3>
        <p>{{ $user->email }}</p>
        <p>{{ $user->Direccion }}</p>
        <p>{{ $user->role }}</p>
        <p>
        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Ver Usuario</a>
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar Usuario</a>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['users.destroy', $user->id]
        ]) !!}
        {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        </p>
        <hr>
    @endforeach
@stop
