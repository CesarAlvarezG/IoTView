@extends('layouts.app')

@section('title','Pagina Privada')

@section('headspace')

    <meta http-equiv="refresh" content="10">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Medida'],
            @foreach($medidas as $medida)
                ["{{$medida->created_at}}", {{$medida->valor}}],
            @endforeach
        ]);

        var options = {
          title: "{{$sensor->Nombre}}",
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

@endsection



@section('sidebar')
    <p>Este es el texto de la barra lateral</p>

@endsection


@section('content')

    <div id="curve_chart" style="width: 900px; height: 500px"></div>

    <p>El canal enviado es: <span style="font-weight: bold; color: red;">
        {{$sensor->Nombre}}.
        </p>
    <p>El tipo de canal es: {{$sensor->Tipo}}</p>
<div>
    <h1>Los datos son:</h1>

    <table id="datos" border="1">
        <tr><th>Creado</th><th>Valor</th></tr>
        @foreach($medidas as $medida)
            <tr>
                <td>{{$medida->created_at}}</td><td> <p> {{ $medida->valor }} </p></td>
            </tr>
        @endforeach
    </table>
</div>





@endsection
