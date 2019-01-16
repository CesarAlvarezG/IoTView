@extends('layouts.app')

@section('title','Pagina Privada')

@section('headspace')

    <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
    <script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('/dist/js/demo.js')}}"></script>

    <script  src="{{asset('bower_components/Flot/jquery.js')}}"></script>
    <script  src="{{asset('bower_components/Flot/jquery.flot.js')}}"></script>

    <script>
  $(function() {

     @foreach($sensores as $sensor)
          @include('PrivateGraf/PagePrivateSensorHead')
      @endforeach
	});
</script>



@endsection

@section('sidebar')

@endsection


@section('content')
    <section class="content-header">
        <h1>
            {{$sistema->Nombre}}
            <small>Sensores activos</small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i>{{$sistema->Nombre}}

            </li>
            @foreach($sensores as $sensor)
                <li><a href="{{url('/viewsistema/sensor',$sensor->id)}}">{{$sensor->Nombre}}</a></li>
            @endforeach
        </ol>
    </section>
    <section class="content">
        <div class="row">
            @foreach($sensores as $sensor)
                @include('PrivateGraf/PagePrivateSensor')
            @endforeach
        </div>
    </section>
@endsection


@section('footerspace')


@endsection

