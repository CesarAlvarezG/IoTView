@extends('layouts.app')

@section('title','Pagina Privada')

@section('headspace')
<style type="text/css">
    ul{
        list-style-type: none;
        margin: :0;
        padding: 0;
        display: flex;
        flex-direction:row;
        flex-direction: column;
    }
    li{flex-grow: 1;}
    a{
        display: block;
        padding: 1em;
        background-color: lightcyan;
        text-align: center;
        margin-right: 0.2em;
        margin-bottom: 0.2em;
        text-decoration: none;
        color:#000000;
    }
    a:hover{background-color: lightgreen;}
    div#contenedor{
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
    }
    section{
        float :left;
        width: 70%;
    }
    aside{
        float: left;
        width: 25%;
        margin-left: 5%;
    }
</style>

@endsection

@section('sidebar')
    <a href="{{url('/')}}">IotView</a>
    <ol >
        @foreach($sistemas as $sistema)
        <ul><a href=  "{{url('/viewsistema',$sistema->id)}}">{{$sistema->Nombre}}</a></ul>
        @endforeach
    </ol>

    @endsection


@section('content')

 @foreach($sistemas as $sistema)
        <h1 align="center">{{$sistema->Nombre}}</h1>
        <p>{{$sistema->Descripcion}}</p>

        <p>Codigo: {{$sistema->id}}</p>
    @endforeach


@endsection
