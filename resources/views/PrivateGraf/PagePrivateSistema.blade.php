@extends('layouts.app')

@section('title','Pagina Privada de sistema')

@section('headspace')


@endsection










@section('sidebar')
    <a href="{{url('/')}}">IotView</a>
    <ol >
        @foreach($sensores as $sensor)
        <ul><a href=  " {{url('/viewsistema/sensor',$sensor->id)}}">{{$sensor->Nombre}}</a></ul>
        @endforeach
    </ol>


@endsection


@section('content')

El sistema: <strong>{{$sistema->Nombre}}</strong>, posee los siguientes sensores:
<div align="center">
    <table id="sensores" border="1">
        <tr><th>Sensor</th><th>Tipo</th></tr>
        @foreach($sensores as $sensor)
            <tr>
                <td>{{$sensor->Nombre}}</td><td> <p> {{ $sensor->Tipo }} </p></td>
            </tr>
        @endforeach
    </table>
</div>





@endsection
