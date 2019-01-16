@extends('layouts.app')


@section('sidebar')

@endsection

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Listado de sistemas</h1>
                <p><a href="{!! url('sistemas/create') !!}">Agregar un nuevo sistema?</a></p>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Nombre de la variable</th>
                            <th>Variable</th>
                            <th>Nombre del Mensaje</th>
                            <th>Mensaje</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                        @foreach($list as $sistema)
                            <tr>
                                <td>
                                    {{ $sistema->id }}
                                </td>
                                <td>
                                    {{ $sistema->Nombre }}
                                </td>
                                <td>
                                    {{ $sistema->Descripcion }}
                                </td>
                                <td>
                                    {{ $sistema->NVar }}
                                </td>
                                <td>
                                    {{ $sistema->Var }}
                                </td>
                                <td>
                                    {{ $sistema->NMensaje }}
                                </td>
                                <td>
                                    {{ $sistema->Mensaje }}
                                </td>

                                <td>
                                    <a href="{{ route('sistemas.show', $sistema->id) }}" class="btn btn-primary">Ver Sistema</a>
                                </td>
                                <td>
                                    <a href="{{ route('sistemas.edit', $sistema->id) }}" class="btn btn-primary">Editar Sistema</a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['sistemas.destroy', $sistema->id]
                                    ]) !!}
                                    {!! Form::submit('Borrar este sistema?', ['class' => 'btn btn-danger']) !!}
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
