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
            <h1 class="box-title">{{ $data->valor }}</h1>
            <p>Valor de la medida</p>
            <table id="tabla1" class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td>ID:</td>
                        <td> {{$data->id}}</td>
                    </tr>
                    <tr>
                        <td>Sensor</td>
                        <td>{{ $sensor->Nombre }}</td>
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
                        <a href="{{ route('medidas.edit', $data->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                    </tr>
                    <tr>
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['medidas.destroy', $data->id]
                        ]) !!}

                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </tr>
                    <tr>
                        <a href="{{ route('medidas.index') }}" class="btn btn-info"><i class="fa fa-fw fa-undo"></i></a>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>
@stop
