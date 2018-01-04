@extends('layouts.app')
@section('content')


<h1>Editar Medida</h1>
<p class="lead">Editar esta medida.
<a href="{{ route('medidas.index') }}">Regresar a todos las medidas.</a></p>
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
    'route' => ['medidas.update', $data->id]
]) !!}


<div class="form-group">
    {!! Form::label('valor', 'Valor:', ['class' => 'control-label']) !!}
    {!! Form::number('valor',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}

</div>
{!! Form::submit('Actualizar sistema', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
