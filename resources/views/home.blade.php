@extends('layouts.app')


@section('headerspace')
@endsection

@section('sidebar')
<div class="content" >
<!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><strong>Panel de control</strong></li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{!! url('users/create') !!}"><i class="fa fa-link"></i> <span>Nuevo usuario</span></a></li>
        <li><a href="{!! url('sistemas/create') !!}"><i class="fa fa-link"></i> <span>Nuevo sistema</span></a></li>  
        <li><a href="{!! url('sensors/create') !!}"><i class="fa fa-link"></i> <span>Nuevo sensor</span></a></li>
        <li><a href="{!! url('medidas/create') !!}"><i class="fa fa-link"></i> <span>Nueva medida</span></a></li>
        <li><a href="{!! url('pids/create') !!}"><i class="fa fa-link"></i> <span>Nuevo control PID</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
</div>
@endsection

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Manejo de la base de datos</h3>
    </div>
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

@endsection
