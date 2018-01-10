@extends('layouts.app')

@section('title','Pagina Privada')

@section('headspace')

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title:{
                text: "Pagina Privada"
            },
            data: [
            {
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "line",
                dataPoints: [
                    @foreach($medidas as $medida)
                            { label: "{{$medida->id}}",  y: {{ $medida->valor }}  },
                    @endforeach
                ]
            }
            ]
        });
        chart.render();
    }
    </script>
@endsection










@section('sidebar')
    <p>Este es el texto de la barra lateral</p>

@endsection


@section('content')



    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
    <p>El canal enviado es: <span style="font-weight: bold; color: red;">
        El canal es {{$elCanal}}.
        </p>
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
