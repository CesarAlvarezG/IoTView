@extends('layouts.app')

@section('headspace')
<style>
        table.blueTable {
          border: 1px solid #1C6EA4;
          background-color: #EEEEEE;
          width: 100%;
          text-align: left;
          border-collapse: collapse;
        }
        table.blueTable td, table.blueTable th {
          border: 1px solid #AAAAAA;
          padding: 3px 2px;
        }
        table.blueTable tbody td {
          font-size: 13px;
        }
        table.blueTable tr:nth-child(even) {
          background: #D0E4F5;
        }
        table.blueTable thead {
          background: #1C6EA4;
          background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
          background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
          background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
          border-bottom: 2px solid #444444;
        }
        table.blueTable thead th {
          font-size: 15px;
          font-weight: bold;
          color: #FFFFFF;
          border-left: 2px solid #D0E4F5;
        }
        table.blueTable thead th:first-child {
          border-left: none;
        }

        table.blueTable tfoot {
          font-size: 14px;
          font-weight: bold;
          color: #FFFFFF;
          background: #D0E4F5;
          background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
          background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
          background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
          border-top: 2px solid #444444;
        }
        table.blueTable tfoot td {
          font-size: 14px;
        }
        table.blueTable tfoot .links {
          text-align: right;
        }
        table.blueTable tfoot .links a{
          display: inline-block;
          background: #1C6EA4;
          color: #FFFFFF;
          padding: 2px 8px;
          border-radius: 5px;
        }

</style>
@stop




@section('content')


<h1>Editar controldor PID</h1>
<p class="lead">Editar este controlador.
<a href="{{ route('pids.index') }}">Regresar a todos los controldores.</a></p>
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
    'route' => ['pids.update', $data->id]
]) !!}


<div class="form-group">
    {!! Form::label('Kp', 'Kp:', ['class' => 'control-label']) !!}
    <p>
    {!! Form::number('Kp',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}
    <p>
    {!! Form::label('Ki', 'Ki:', ['class' => 'control-label']) !!}
    <p>
    {!! Form::number('Ki',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}
    <p>
    {!! Form::label('Kd', 'Kd:', ['class' => 'control-label']) !!}
    <p>
    {!! Form::number('Kd',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}
    <p>
    {!! Form::label('Ts', 'Ts:', ['class' => 'control-label']) !!}
    <p>
    {!! Form::number('Ts',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}
    <p>
    {!! Form::label('SetPoint', 'SetPoint:', ['class' => 'control-label']) !!}
    <p>
    {!! Form::number('SetPoint',$data->valor  ,['step'=>"0.01",'required'=>'autofocus']) !!}
    <p>
    {!! Form::label('Sensor', 'Sensor:', ['class' => 'control-label']) !!}
    <p>
    {!! Form::number('sensor_id',$data->sensor_id) !!}
</div>
{!! Form::submit('Actualizar control', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<h1>Listado de sensores disponibles</h1>
<table class="blueTable">
<thead>
<tr>
<th>Id</th>
<th>Nombre</th>
</tr>
</thead>
<tbody>
@foreach($sensores as $sensor)
            <tr>
                <td>{{$sensor->id}}</td><td> <p> {{ $sensor->Nombre }} </p></td>
            </tr>
        @endforeach
</tbody>
</table>


@stop