@extends('layouts.app')

@section('title','Pagina Privada')

@section('headspace')
@endsection

@section('sidebar')
<div class="content" >
<!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><strong>Panel de control</strong></li>
        <!-- Optionally, you can add icons to the links -->
        @foreach($sistemas as $sistema)
            <li><a href="{{url('/viewsistema',$sistema->id)}}"><i class="fa fa-link"></i> <span>{{$sistema->Nombre}}</span></a></li>
        @endforeach

      </ul>
      <!-- /.sidebar-menu -->
</div>

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
