@extends('layouts.app')


@section('headerspace')
@endsection

@section('sidebar')
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="{!! url('users/create') !!}"><i class="fa fa-link"></i> <span>Nuevo usuario</span></a></li>
        <li><a href="{!! url('sistemas/create') !!}"><i class="fa fa-link"></i> <span>Nuevo sistema</span></a></li>  
        <li><a href="{!! url('sensors/create') !!}"><i class="fa fa-link"></i> <span>Nuevo sensor</span></a></li>
        <li><a href="{!! url('medidas/create') !!}"><i class="fa fa-link"></i> <span>Nueva medida</span></a></li>
        <li><a href="{!! url('pids/create') !!}"><i class="fa fa-link"></i> <span>Nuevo control PID</span></a></li>
      </ul>
@endsection

@section('content')
<div class="col-md-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Panel de control de aplicación</h3>
        </div>
        <p>Espacio para el control de la aplicación IotView.</p>
    </div>


    <div class="box">
        <div class="box-body">
            <p>Control de la bases de datos y sus componentes:</p>
            <a href="{!! url('users/') !!}" class="btn btn-app">
                    <span class="badge bg-purple">{{$users}}</span>
                    <i class="fa fa-users"></i> Usuarios
                  </a>
            <a href="{!! url('sistemas/') !!}" class="btn btn-app">
                <span class="badge bg-green">{{$sistemas}}</span>
                <i class="fa fa-edit"></i> Sistemas
            </a>
            <a href="{!! url('sensors/') !!}" class="btn btn-app">
                <span class="badge bg-green">{{$sensores}}</span>
                <i class="fa fa-play"></i> Sensores
            </a>
            <a href="{!! url('pids/') !!}" class="btn btn-app">
                <span class="badge bg-green">{{$pids}}</span>
                <i class="fa fa-repeat"></i> PIDs
            </a>
            <a href="{!! url('medidas/') !!}" class="btn btn-app">
                <span class="badge bg-green">{{$medidas}}</span>
                <i class="fa fa-barcode"></i> Medidas
          </a>
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
