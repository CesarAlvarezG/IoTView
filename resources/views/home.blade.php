@extends('layouts.app')


@section('headerspace')
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
<div class="content" >

<h3>Panel de control</h3>
    <ol>
        <ul><a href="{!! url('users/create') !!}">Nuevo usuario</a></ul>.
        <ul><a href="{!! url('sistemas/create') !!}">Nuevo sistema</a></ul>.
        <ul><a href="{!! url('sensors/create') !!}">Nuevo sensor</a></ul>.
        <ul><a href="{!! url('medidas/create') !!}">Nueva medida</a></ul>.
        <ul><a href="{!! url('pids/create') !!}">Nuevo control PID</a></ul>.
    </ol>
</div>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ol>
                        <ul><a href="{!! url('users/') !!}">Manejo de usuarios</a></ul>.
                        <ul><a href="{!! url('sistemas/') !!}">Manejo de sistemas</a></ul>.
                        <ul><a href="{!! url('sensors/') !!}">Manejo de sensores</a></ul>.
                        <ul><a href="{!! url('medidas/') !!}">Manejo de medidas</a></ul>.
                        <ul><a href="{!! url('pids/') !!}">Manejo de controles PID</a></ul>.
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
