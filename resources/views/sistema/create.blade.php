@extends('layouts.app')


@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Agregar un nuevo sistema</h1>
            <p>Inserte la información del nuevo sistema.</p>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    {!! Form::open(['route' => 'sistemas.store']) !!}
        <div class="box-body">
            <div class="form-group">
            {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Descripcion', 'Descripción', ['class' => 'control-label']) !!}
            {!! Form::text('Descripcion', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Confirmacion','Token' , ['class' => 'control-label']) !!}
            {!! Form::text('Confirmacion', $token, ['class' => 'control-label']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('NVar', 'Nombre de variable', ['class' => 'control-label']) !!}
            {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Var', 'Valor de la variable', ['class' => 'control-label']) !!}
            {!! Form::number('Var','0.0',['step'=>"0.01",'required'=>'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('NMensaje', 'Nombre del mensaje', ['class' => 'control-label']) !!}
            {!! Form::text('NMensaje', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Mensaje', 'Mensaje del sistema', ['class' => 'control-label']) !!}
            {!! Form::text('Mensaje', null, ['class' => 'form-control']) !!}
        </div>

        <div class="box-footer">
            {!! Form::submit('Crear un nuevo sistema', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>

@stop
