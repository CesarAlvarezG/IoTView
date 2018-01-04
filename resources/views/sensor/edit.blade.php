@extends('layouts.app')
@section('content')


<h1>Editar sensor</h1>
<p class="lead">Editar este sensor.
<a href="{{ route('sensors.index') }}">Regresar a todos los sensores.</a></p>
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
    'route' => ['sensors.update', $data->id]
]) !!}

<div class="form-group">
    {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
    {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Tipo', 'Tipo', ['class' => 'control-label']) !!}
    {!! Form::select('Tipo', ['Continuo' => 'Continuo', 'Discreto' => 'Discreto']); !!}
</div>
{!! Form::submit('Actualizar sistema', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
