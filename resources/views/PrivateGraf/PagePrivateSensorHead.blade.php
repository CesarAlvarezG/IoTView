
var data{{$sensor->id}} = [], totalPoints{{$sensor->id}} = 1000;

var sensorData{{$sensor->id}}=0;


function loadData{{$sensor->id}}()
    {
        var xhttp{{$sensor->id}}= new XMLHttpRequest();
        xhttp{{$sensor->id}}.onreadystatechange=function()
        {
            if(this.readyState==4 && this.status==200)
                {
                    var x=this.responseText;
                    var y=JSON.parse(x);
                    sensorData{{$sensor->id}}=y;
                    document.getElementById("Display{{$sensor->id}}").innerHTML=y;
                }
        };
        xhttp{{$sensor->id}}.open("GET","{{url('viewsistema/sensor',$sensor->id)}}",true);
        xhttp{{$sensor->id}}.send();
    }

function getData{{$sensor->id}}() {

			if (data{{$sensor->id}}.length > 0)
				data{{$sensor->id}} = data{{$sensor->id}}.slice(1);

			while (data{{$sensor->id}}.length < totalPoints{{$sensor->id}}) {
                loadData{{$sensor->id}}();
				var prev = data{{$sensor->id}}.length > 0 ? data{{$sensor->id}}[data{{$sensor->id}}.length - 1] : 0,
					y = sensorData{{$sensor->id}};

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data{{$sensor->id}}.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data{{$sensor->id}}.length; ++i) {
				res.push([i, data{{$sensor->id}}[i]])
			}

			return res;
		}

var updateInterval{{$sensor->id}} = 500;

var plot{{$sensor->id}} = $.plot("#interactive{{$sensor->id}}", [ getData{{$sensor->id}}() ], {
			grid: {
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
				shadowSize: 0,	// Drawing is faster without shadows
                color: '#3c8dbc'
			},
            lines:{
                fill: true,
                color: '#3c8dbc'
            },
			yaxis: {
				min: 0,
				max: 100,
                show: true
			},
			xaxis: {
				show: true
			}
		});

var realtime{{$sensor->id}}='on';

function update{{$sensor->id}}() {

			plot{{$sensor->id}}.setData([getData{{$sensor->id}}()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot{{$sensor->id}}.draw();

            if(realtime{{$sensor->id}}==='on') setTimeout(update{{$sensor->id}}, updateInterval{{$sensor->id}});
		}

        if(realtime{{$sensor->id}}==='on')
            {
                update{{$sensor->id}}();
            }


        $('#realtime{{$sensor->id}} .btn').click(function(){
            if($(this).data('toggle')==='on'){
                realtime{{$sensor->id}}='on'
            }else{
                realtime{{$sensor->id}}='off'
            }
            update{{$sensor->id}}()
        })

