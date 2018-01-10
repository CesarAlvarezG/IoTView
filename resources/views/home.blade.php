@extends('layouts.app')

@section('sidebar')
    <ol>
        <ul><a href="{!! url('users/') !!}">Nuevo usuario</a></ul>.
        <ul><a href="{!! url('sistemas/') !!}">Nuevo sistema</a></ul>.
        <ul><a href="{!! url('sensors/') !!}">Nuevo sensor</a></ul>.
        <ul><a href="{!! url('medidas/') !!}">Nueva medida</a></ul>.
    </ol>

@endsection

@section('content')
<div class="container">
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

                    Estas logueado!<br>
                    <br>
                    <ol>
                        <ul><a href="{!! url('users/') !!}">Manejo de usuarios</a></ul>.
                        <ul><a href="{!! url('sistemas/') !!}">Manejo de sistemas</a></ul>.
                        <ul><a href="{!! url('sensors/') !!}">Manejo de sensores</a></ul>.
                        <ul><a href="{!! url('medidas/') !!}">Manejo de medidas</a></ul>.
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
