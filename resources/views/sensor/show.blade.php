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
            <h1 class="box-title">{{ $data->Nombre }}</h1>
            <p>Datos del sensor</p>
            <table id="tabla1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>ID:</td>
                        <td> {{$data->id}}</td>
                    </tr>
                    <tr>
                        <td >Tipo de medida</td>
                        <td>{{ $data->Tipo }}</td>
                    </tr>
                    <tr>
                        <td>Código del sensor</td>
                        <td>{{ $data->id }}</td>
                    </tr>
                    <tr>
                        <td>Tipo de señal</td>
                        <td>{{ $data->Tipo }}</td>
                    </tr>
                    <tr>
                        <td>Nombre de la variable</td>
                        <td>{{ $data->NVar}}</td>
                    </tr>
                    <tr>
                        <td>Valor de la variable</td>
                        <td>{{ $data->Var }}</td>
                    </tr>
                    <tr>
                        <td>Nombre del mensaje</td>
                        <td>{{ $data->NMensaje }}</td>
                    </tr>
                    <tr>
                        <td>Mensaje</td>
                        <td>{{ $data->Mensaje }}</td>
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
                        <a href="{{ route('sensors.edit', $data->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                    </tr>
                    <tr>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['sensors.destroy', $data->id]
                        ]) !!}

                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </tr>
                    <tr>
                        <a href="{{ route('sensors.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@stop
