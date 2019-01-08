@extends('layouts.app')

@section('title','Pagina Publica')

@section('headspace')


@endsection


@section('sidebar')


@endsection


@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="Box">
            <div class="box-header">
                <h1 class="box-title">Los sistemas actuales son:</h1>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                         @foreach($sistemas as $sistema)
                            <tr>
                                <td>{{$sistema->id}}</td>
                                <td>{{$sistema->Nombre}}</td>
                                <td>{{$sistema->Descripcion}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



@section('footerspace')

        <!-- jQuery 3 -->
    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>

@endsection

