@extends('layouts.app')


@section('headspace')

    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>

    <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('/dist/js/demo.js')}}"></script>

@endsection

@section('content')
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h1 class="box-title">Control PID</h1>
            <p>Datos del control</p>
            <table id="tabla1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>ID:</td>
                        <td> {{$data->id}}</td>
                    </tr>
                    <tr>
                        <td>Kp</td>
                        <td>{{ $data->Kp }}</td>
                    </tr>
                    <tr>
                        <td>Ki</td>
                        <td>{{ $data->Ki }}</td>
                    </tr>
                    <tr>
                        <td>Kd</td>
                        <td>{{ $data->Kd }}</td>
                    </tr>
                    <tr>
                        <td>Ts</td>
                        <td>{{ $data->Ts }}</td>
                    </tr>
                    <tr>
                        <td>SetPoint</td>
                        <td>{{ $data->SetPoint }}</td>
                    </tr>
                    <tr>
                        <td>Sensor</td>
                        <td>{{ $data->sensor_id }}</td>
                    </tr>


                    <tr>
                        <td>Created At</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Updated At</td>
                        <td>{{ $data->updated_at }}</td>
                    </tr>

                </tbody>
                <tfoot>
            </table>
            <div class="box-footer">
                <table>
                    <tr>
                        <a href="{{ route('pids.edit', $data->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                    </tr>
                    <tr>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['pids.destroy', $data->id]
                        ]) !!}

                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </tr>
                    <tr>
                        <a href="{{ route('pids.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@stop
