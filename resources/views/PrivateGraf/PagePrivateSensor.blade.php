
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
        <div class="box-footer">
            <div class="row">
                <div class="col-md-4 border-rigth">
                    <div class="description-box">
                        <h5 class="description-header"><b>TIPO:</b></h5>
                            <span class="description-text">{{$sensor->Tipo}}</span>
                    </div>
                </div>
                <div class="col-md-4 border-rigth">
                    <div class="description-box">
                        <h5 class="description-header"><b>{{$sensor->NVar}}:</b></h5>
                        <span class="description-text" id="Display{{$sensor->id}}">{{$sensor->Var}}</span>
                    </div>
                </div>
                <div class="col-md-4 border-rigth">
                    <div class="description-box">
                        <h5 class="info-box-text"><b> {{$sensor->NMensaje}}:</b> </h5>
                        <span class="description-text">{{$sensor->Mensaje}}</span>
                    </div>
                </div>
                @if($sensor->Tipo==="Sensor")
                    <div class="col-md-4 border-rigth">
                        <div class="description-box">
                            <h5 class="description-header"><b>SetPoint:</b></h5>
                                <span class="description-text"> {{$sensor->SetPoint}}</span>
                        </div>
                    </div>
                @if($user->role==="1")
                <a href="{{ route('sensors.edit', $sensor->id) }}" class="btn btn-primary"><i class="fa fa-fw fa-pencil"></i></a>
                @endif
                @endif

            </div>

        </div>
    </div>
</div>
