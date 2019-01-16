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

<script>
  $(function() {
    $('#tabla1').DataTable()

	})
</script>



@endsection


@section('sidebar')



@endsection




@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Listado de medidas</h1>
                <p><a href="{!! url('medidas/create') !!}">Agregar una nueva medida?</a></p>
                <div class="box-body">
                    <table id="tabla1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Valor</th>
                                <th>Sensor</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                        <a href="{{ route('medidas.show', $medida->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('medidas.edit', $medida->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['medidas.destroy', $medida->id]
                                        ]) !!}
                                        {!! Form::submit('X', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Valor</th>
                                <th>Sensor</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                            </tfoot>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop



@section('footerspace')



@endsection
