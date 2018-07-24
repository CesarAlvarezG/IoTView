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
<div class="form-group">
    {!! Form::label('NVar', 'Nombre de la variable', ['class' => 'control-label']) !!}
    {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Var', 'Valor de la variable', ['class' => 'control-label']) !!}
    {!! Form::number('Var',null,['step'=>"0.01",'required'=>'autofocus']) !!}
</div>
<div class="form-group">
    {!! Form::label('NMensaje', 'Nombre del mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('NMensaje', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Mensaje', 'Mensaje', ['class' => 'control-label']) !!}
    {!! Form::text('Mensaje', null, ['class' => 'form-control']) !!}
</div>




</div>
    {!! Form::submit('Actualizar sistema', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@stop
