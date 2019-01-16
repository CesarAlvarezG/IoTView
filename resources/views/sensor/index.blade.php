@extends('layouts.app')


@section('sidebar')



@endsection


@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Listado de sensores</h1>
                <p><a href="{!! url('sensors/create') !!}">Agregar un nuevo sensor?</a></p>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tipo de señal</th>
                            <th>Nombre de la variable</th>
                            <th>Variable</th>
                            <th>Nombre del Mensaje</th>
                            <th>Mensaje</th>
                            <th>Token</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                        @foreach($list as $sensor)
                            <tr>
                                <td>
                                    {{ $sensor->id }}
                                </td>
                                <td>
                                    {{ $sensor->Nombre }}
                                </td>
                                <td>
                                    {{ $sensor->Tipo }}
                                </td>
                                <td>
                                    {{ $sensor->NVar }}
                                </td>
                                <td>
                                    {{ $sensor->Var }}
                                </td>
                                <td>
                                    {{ $sensor->NMensaje }}
                                </td>
                                <td>
                                    {{ $sensor->Mensaje }}
                                </td>
                                <td>
                                    {{ $sensor->Confirmacion }}
                                </td>
                                <td>
                                    <a href="{{ route('sensors.show', $sensor->id) }}" class="btn btn-primary">Ver Sensor</a>
                                </td>
                                <td>
                                    <a href="{{ route('sensors.edit', $sensor->id) }}" class="btn btn-primary">Editar Sensor</a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['sensors.destroy', $sensor->id]
                                    ]) !!}
                                    {!! Form::submit('Borrar este sensor?', ['class' => 'btn btn-danger']) !!}
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
