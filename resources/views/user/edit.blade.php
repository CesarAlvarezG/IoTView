@extends('layouts.app')
@section('content')

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
             <h1 class="box-title">Editar usuario</h1>
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
    'route' => ['users.update', $data->id]
    ]) !!}
        <div class="box-body">
            <div class="form-group">
                {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role', 'Rol', ['class' => 'control-label']) !!}
                {!! Form::select('role', ['1' => 'Administrador', '2' => 'Persona','3' => 'IoTSystem']); !!}
            </div>
            <div class="form-group">
                {!! Form::label('Direccion', 'Dirección', ['class' => 'control-label']) !!}
                {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="box-footer">
                {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                <a href="{{ route('users.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
            </div>
        </div>
    </div>
</section>

@stop
