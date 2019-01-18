@extends('layouts.app')


@section('content')
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Editar Medida</h1>
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
    'route' => ['medidas.update', $data->id]
    ]) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('valor', 'Valor:', ['class' => 'control-label']) !!}
                {!! Form::number('valor',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('sensor_id','Sensor' , ['class' => 'control-label']) !!}
                <select name="sensor_id">
                    @foreach($sensores as $sensor)
                            <option value='{{$sensor->id}}'>{{ $sensor->Nombre }} ID:{{$sensor->id}}</option>
                    @endforeach
                </select>
                <p>Sensor actual: {{ $data->sensor_id }}</p>
            </div>

            <div class="box-footer">
                {!! Form::submit('Actualizar medida', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <a href="{{ route('medidas.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
            </div>
        </div>
    </div>
</section>
@stop
