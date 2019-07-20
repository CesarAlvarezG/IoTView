@extends('layouts.app')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Editar sistema</h1>
            <p></p>
            <p>Equivalente a un Objeto de Internet implementado por medio de un sistema embebido, actualmente ESP32 o ESP8266.</p>
        </div>
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
                {!! Form::text('Confirmacion',null, ['class' => 'control-label']) !!}
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
            <div class="box-footer">
                {!! Form::submit('Actualizar sistema', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <a href="{{ route('sistemas.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
            </div>
        </div>
    </div>
</section>

@stop
