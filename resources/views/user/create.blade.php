@extends('layouts.app')


@section('content')
    <h1>Añadir un nuevo usuario</h1>
    <p class="lead">.</p>
    <hr>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open(['route' => 'users.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Crear un nuevo usuario', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
