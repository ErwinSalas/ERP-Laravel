@foreach($products as $product)
<div class="col-md-10 col-md-offset-1 ">
    <div class="panel panel-default  panel--styled">
        <div class="panel-body">
            <div class="col-md-12 panelTop">
                <div class="col-md-3">
                    <img class="img-responsive" src="http://placehold.it/350x350" alt="" />
                </div>
                <div class="col-md-9">
                    <h2>{{$product->name}}</h2>
                    <p><strong>Marca :</strong>{{$product->brand}}</p>
                    <p><strong>Casa de manufactura :</strong>{{$product->manufacturing_house}}</p>
                    <p><strong>Registro :</strong>{{$product->register_day}}</p>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn-danger" onclick="Eliminar({{$product->id}})">eliminar</button>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <button class="btn-primary" onclick="Mostrar({{$product->id}})">editar</button>
                        </div>

                    </div>
                    <di class="row">
                        <div class="col-md-4 text-left">
                            <h5>Price <span class="itemPrice">{{$product->sales_tax}}</span></h5>
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
            {{$products->links()}}
        </div>
    </div>
</div>