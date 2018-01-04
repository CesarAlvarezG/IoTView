@extends('layouts.app')
@section('content')


<h1>Editar sistema</h1>
<p class="lead">Editar este sistema.
<a href="{{ route('sistemas.index') }}">Regresar a todos los sistemas.</a></p>
<hr>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::model($data, [
    'method' => 'PUT',
    'route' => ['sistemas.update', $data->id]
]) !!}

<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Descripcion', 'Dirección', ['class' => 'control-label']) !!}
    {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
</div>
    {!! Form::submit('Actualizar sistema', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
