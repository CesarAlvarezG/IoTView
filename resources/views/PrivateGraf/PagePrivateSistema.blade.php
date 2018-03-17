@extends('layouts.app')

@section('title','Pagina Privada de sistema')

@section('headspace')

    <style>

#marco {
    background-color: white;
    padding: 10px;
    margin: 10px;
    border: 3px solid black;
}

#contenedor {
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;

    -webkit-flex-wrap: wrap;
    flex-wrap:wrap;
}

.vertical {
  padding:3px;
  border:1px solid black;
  background-color:white;
  width:300px;
  height:400px;
}

.horizontal {
  border:1px solid white;
  background-color:white;
  width:90%;
  height:550px;
}

</style>

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
<div align="center">
    <h1>El sistema: <strong>{{$sistema->Nombre}}</strong>, posee los siguientes sensores:</h1>
</div>
    @foreach($sensores as $sensor)
    <div id="contenedor">
        <object class="horizontal" data ="{{url('/viewsistema/sensor',$sensor->id)}}" type="text/html"></object>
    </div>
@endforeach

@endsection
