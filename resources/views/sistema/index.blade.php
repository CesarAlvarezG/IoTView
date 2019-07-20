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
                <h1 class="box-title">Listado de sistemas</h1>
                <p><a href="{!! url('sistemas/create') !!}">Agregar un nuevo sistema?</a></p>
                <p>Cada sistema equivale a un Objeto de Internet implementado por medio de un sistema embebido, actualmente ESP32 o ESP8266.</p>
                <div class="box-body">
                    <table id="tabla1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Token</th>
                                <th>Nombre de la variable</th>
                                <th>Variable</th>
                                <th>Nombre del Mensaje</th>
                                <th>Mensaje</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                        {{ $sistema->Confirmacion }}
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
                                        <a href="{{ route('sistemas.show', $sistema->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('sistemas.edit', $sistema->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                                    </td>
                                    <td>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['sistemas.destroy', $sistema->id]
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
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Token</th>
                                <th>Nombre de la variable</th>
                                <th>Variable</th>
                                <th>Nombre del Mensaje</th>
                                <th>Mensaje</th>
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


