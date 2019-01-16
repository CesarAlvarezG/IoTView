@extends('layouts.app')


@section('sidebar')

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Listado de usuarios</h1>
                <p><a href="{!! url('users/create') !!}">Agregar un nuevo usuario?</a></p>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Dirección</th>
                            <th>Rol</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                        @foreach($list as $user)
                            <tr>
                                <td>
                                    {{ $user->id }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->Direccion }}
                                </td>
                                <td>
                                    {{ $user->role }}
                                </td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Ver Usuario</a>
                                </td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar Usuario</a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['users.destroy', $user->id]
                                    ]) !!}
                                    {!! Form::submit('Borrar este usuario?', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop



@section('footerspace')

        <!-- jQuery 3 -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

@endsection
