@extends('layouts.app')


@section('sidebar')



@endsection




@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Listado de medidas</h1>
                <p><a href="{!! url('medidas/create') !!}">Agregar una nueva medida?</a></p>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Valor</th>
                            <th>Sensor</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                        @foreach($list as $medida)
                            <tr>
                                <td>
                                    {{ $medida->id }}
                                </td>
                                <td>
                                    {{ $medida->valor }}
                                </td>
                                <td>
                                    {{ $medida->sensor_id }}
                                </td>
                                <td>
                                    <a href="{{ route('medidas.show', $medida->id) }}" class="btn btn-primary">Ver Medida</a>
                                </td>
                                <td>
                                    <a href="{{ route('medidas.edit', $medida->id) }}" class="btn btn-primary">Editar Medida</a>
                                </td>
                                <td>
                                    {!! Form::open([
                                        'method' => 'DELETE',
                                        'route' => ['medidas.destroy', $medida->id]
                                    ]) !!}
                                    {!! Form::submit('Borrar esta medida?', ['class' => 'btn btn-danger']) !!}
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
