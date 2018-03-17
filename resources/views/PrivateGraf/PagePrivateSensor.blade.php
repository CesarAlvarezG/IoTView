<html>
    <head>
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
    </head>
    <body>
        <div id="curve_chart" style="width: 100%; height: 100%"></div>
    </body>
</html>
