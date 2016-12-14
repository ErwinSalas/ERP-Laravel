<form class="form-horizontal" role="form" id="edit_form">


    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name"  required autofocus value="{{$product->name}}">


        </div>
    </div>

    <div class="form-group">
        <label for="brand" class="col-md-4 control-label">Marca</label>

        <div class="col-md-6">
            <input id="brand" type="text" class="form-control" name="brand"  required value="{{$product->brand}}">


        </div>
    </div>

    <div class="form-group">
        <label for="family" class="col-md-4 control-label">Familia</label>

        <div class="col-md-6">
            <input id="family" type="text" class="form-control" name="family" required value="{{$product->family}}">


        </div>
    </div>

    <div class="form-group">
        <label for="manufacturing_house" class="col-md-4 control-label" >Casa de fabricacion</label>

        <div class="col-md-6">
            <input id="manufacturing_house" type="text" class="form-control" name="manufacturing_house" required value="{{$product->manufacturing_house}}">


        </div>
    </div>
    <div class="form-group">
        <label for="unit_type" class="col-md-4 control-label">Tipo de Unidad</label>

        <div class="col-md-6">
            <input id="unit_type" type="text" class="form-control" name="unit_type" required value="{{$product->unit_type}}">


        </div>
    </div>
    <div class="form-group">
        <label for="department" class="col-md-4 control-label">Departamento</label>

        <div class="col-md-6">
            <input id="department" type="text" class="form-control" name="department" required value="{{$product->department}}">


        </div>
    </div>
    <div class="form-group">
        <label for="register_day" class="col-md-4 control-label">Dia de Registro</label>

        <div class="col-md-6">
            <input id="register_day" type="date" class="form-control" name="register_day" required value="{{$product->register_day}}">


        </div>
    </div>
    <div class="form-group">
        <label for="sales_tax" class="col-md-4 control-label">Impuesto</label>

        <div class="col-md-6">
            <input id="sales_tax" type="number" class="form-control" name="sales_tax" required value="{{$product->sales_tax}}">


        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-4  ">
            <div class="checkbox">
                <label>
                    @if($product->active)
                    <input type="checkbox" name="active" checked=1 value=1> activo
                    @else
                        <input type="checkbox" name="active" checked=0 value=1> activo
                    @endif
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-4 ">
            <div class="checkbox">
                <label>
                    @if(!$product->active)
                        <input type="checkbox" name="active" checked=1 value=0> inactivo
                    @else
                        <input type="checkbox" name="active" checked=0 value=0> inactivo
                    @endif
                </label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button id="edit_btn" onclick="actualizar({{$product->id}})" type="submit" class="btn btn-primary">
                actualizar
            </button>
        </div>
    </div>
</form>