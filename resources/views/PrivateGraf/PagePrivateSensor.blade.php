
<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>
            <h3 class="box-title">{{$sensor->Nombre}}</h3>
            <div class="box-tools pull-right">
                Tiempo real
                <div class="btn-group" id="realtime{{$sensor->id}}" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-xs active" data-toggle="On">On</button>
                    <button type="button" class="btn btn-default btn-xs " data-toggle="Off">Off</button>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="collpse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div id="interactive{{$sensor->id}}" style= "height:250px">
            </div>
        </div>
    </div>
</div>
