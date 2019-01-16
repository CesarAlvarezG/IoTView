@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Listado de controles PID</h1>
                <p><a href="{!! url('pids/create') !!}">Agregar una nuevo control PID?</a></p>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Kp</th>
                            <th>Kd</th>
                            <th>Ki</th>
                            <th>Ts</th>
                            <th>SetPoint</th>
                            <th>Sensor</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                        @foreach($list as $pid)
                            <tr>
                                <td>
                                    {{ $pid->id }}
                                </td>
                                <td>
                                    {{ $pid->Kp }}
                                </td>
                                <td>
                                    {{ $pid->Ki }}
                                </td>
                                <td>
                                    {{ $pid->Kd }}
                                </td>
                                <td>
                                    {{ $pid->Ts }}
                                </td>
                                <td>
                                    {{ $pid->SetPoint }}
                                </td>
                                <td>
                                    {{ $pid->sensor_id }}
                                </td>
                                <td>
                                    <a href="{{ route('pids.show', $pid->id) }}" class="btn btn-primary">Ver Control PID</a>
                                </td>
                                <td>
                                    <a href="{{ route('pids.edit', $pid->id) }}" class="btn btn-primary">Editar Control PID</a>
                                </td>
                                <td>
                                    {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['pids.destroy', $pid->id]
                                ]) !!}
                                {!! Form::submit('Borrar este control PID?', ['class' => 'btn btn-danger']) !!}
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
