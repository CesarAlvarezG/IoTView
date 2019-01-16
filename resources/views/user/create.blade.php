@extends('layouts.app')


@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Añadir un nuevo usuario</h1>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

    {!! Form::open(['route' => 'users.store']) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Direccion', 'Dirección', ['class' => 'control-label']) !!}
                {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Crear un nuevo usuario', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</section>





@stop
