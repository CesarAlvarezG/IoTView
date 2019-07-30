@extends('layouts.app')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Editar sensor</h1>
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
    'route' => ['sensors.update', $data->id]
    ]) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('Nombre', 'Nombre', ['class' => 'control-label']) !!}
                {!! Form::text('Nombre', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Tipo', 'Tipo', ['class' => 'control-label']) !!}
                {!! Form::select('Tipo', ['Sensor' => 'Sensor', 'Actuador' => 'Actuador']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('NVar', 'Nombre de variable', ['class' => 'control-label']) !!}
                {!! Form::text('NVar', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Var', 'Variable:', ['class' => 'control-label']) !!}
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
            <div class="form-group">
                {!! Form::label('SetPoint', 'SetPoint:', ['class' => 'control-label']) !!}
                {!! Form::number('SetPoint',null,['step'=>"0.01",'required'=>'autofocus']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('sistema_id','Sistema' , ['class' => 'control-label']) !!}
                <select name="sistema_id">
                    @foreach($sistemas as $sistema)
                            <option value='{{$sistema->id}}'>{{ $sistema->Nombre }} ID:{{$sistema->id}}</option>
                    @endforeach
                </select>
                <p>Sistema actual: {{ $data->sistema_id }}</p>
            </div>
            <div class="box-footer">
                {!! Form::submit('Actualizar sensor', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <a href="{{ route('sensors.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
            </div>
        </div>
    </div>
</section>
@stop
