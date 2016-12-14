@foreach($clients as $client)
    <div class="col-md-10 col-md-offset-1 ">
        <div class="panel panel-default  panel--styled">
            <div class="panel-body">
                <div class="col-md-12 panelTop">
                    <div class="col-md-3">
                        <div class="span2">
                            <img src="http://www.gravatar.com/avatar/f6112e781842d6a2b4636b35451401ff?s=125" class="img-polaroid"/>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <h2>{{$client->name}}</h2>
                        <p><strong>Direccion: </strong> {{$client->address}}</p>
                        <p><strong>Tipo: </strong> {{$client->type}}</p>
                        <p><strong>Sexo:</strong> {{$client->sex}}</p>
                        <div class="row">
                            <div class="col-md-2">
                                <button class="btn-danger" onclick="Eliminar({{$client->id}})">eliminar</button>
                            </div>
                            <div class="col-md-2 col-md-offset-1">
                                <button class="btn-primary" onclick="Mostrar({{$client->id}})">editar</button>
                            </div>

                        </div>
                        <di class="row">
                            <div class="col-md-4 text-left">
                                <h5>Descuento <span class="itemPrice">{{$client->discount}}</span></h5>
                            </div>
                            <div class="col-md-4">
                                <div class="stars">
                                    <div id="stars" class="starrr"></div>
                                </div>
                            </div>
                        </di>

                    </div>
                </div>

                <div class="col-md-12 panelBottom">

                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="rs_pagination rs_toppadder40 rs_bottompadder40 text-center">
            {{$clients->links()}}
        </div>
    </div>
</div>


