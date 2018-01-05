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
                    { label: "Sensor 1",  y: 45  },
                    { label: "Sensor 2", y: 15  },
                    { label: "Sensor 3", y: 25  },
                    { label: "Sensor 4",  y: 30  },
                    { label: "Sensor 5",  y: 28  }
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

    <table>
        @foreach($medidas as $medida)
            <tr>
                <td> <p> {{ $medida->valor }} </p></td>
            </tr>
        @endforeach
    </table>
</div>


@endsection
