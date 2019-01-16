@extends('layouts.app')



@section('content')


<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Agregar un nuevo sensor</h1>
            <p>Inserte la información del nuevo sensor.</p>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    {!! Form::open(['route' => 'sensors.store']) !!}

        <div class="box-body">
            <div class="form-group">
            {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Nombre', 'Tipo de señal', ['class' => 'control-label']) !!}
            {!! Form::select('Tipo', ['Sensor' => 'Sensor', 'Actuador' => 'Actuador'], 'Sensor'); !!}
        </div>
        <div class="form-group">
            {!! Form::label('NVar', 'Nombre de variable', ['class' => 'control-label']) !!}
            {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Var', 'Variable:', ['class' => 'control-label']) !!}
            {!! Form::number('Var','0.0',['step'=>"0.01",'required'=>'autofocus']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('NMensaje', 'Nombre del mensaje', ['class' => 'control-label']) !!}
            {!! Form::text('NMensaje', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Mensaje', 'Mensaje', ['class' => 'control-label']) !!}
            {!! Form::text('Mensaje', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Confirmacion','Token' , ['class' => 'control-label']) !!}
            {!! Form::text('Confirmacion', $token, ['class' => 'control-label']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sistema_id','Sistema' , ['class' => 'control-label']) !!}
            <select name="sistema_id">
                @foreach($sistemas as $sistema)
                        <option value='{{$sistema->id}}'>{{ $sistema->Nombre }} ID:{{$sistema->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="box-footer">
            {!! Form::submit('Crear un nuevo sensor', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        </div>
    </div>
</section>

@stop
