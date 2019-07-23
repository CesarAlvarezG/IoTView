@extends('layouts.app')

@section('title','Pagina Privada')

@section('headspace')
@endsection

@section('sidebar')
<div class="content" >
<!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        @foreach($sistemas as $sistema)
            <li><a href="{{url('/viewsistema',$sistema->id)}}"><i class="fa fa-link"></i> <span>{{$sistema->Nombre}}</span></a></li>
        @endforeach
      </ul>
</div>

@endsection


@section('content')
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3> {{$nUsua}}</h3>
                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$nSist}}</h3>
                <p>Sistemas</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
            <div class="inner">
                <h3>{{$nSen}}</h3>
                <p>Sensores</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{$nPid}}</h3>
                <p>Controles PID</p>
            </div>
            <div class="icon">
                <i class="ion ion-jet"></i>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Sistemas actuales</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Sensores</th>
                        </tr>
                         @foreach($sistemas as $sistema)
                            <tr>
                                <td><a href="{{url('/viewsistema',$sistema->id)}}"> <span>{{$sistema->id}}</span></a></td>
                                <td><a href="{{url('/viewsistema',$sistema->id)}}"> <span>{{$sistema->Nombre}}</span></a></td>
                                <td><a href="{{url('/viewsistema',$sistema->id)}}"> <span>{{$sistema->Descripcion}}</span></a></td>
                                <td><a href="{{url('/viewsistema',$sistema->id)}}"> <span>{{$sistema->Sensors->count()}}</span></a></td>
                            </tr>
                        @endforeach
                </table>
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

