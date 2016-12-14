<form class="form-horizontal" role="form" method="POST" action="{{ url('/products') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name"  required autofocus>


        </div>
    </div>

    <div class="form-group">
        <label for="brand" class="col-md-4 control-label">Marca</label>

        <div class="col-md-6">
            <input id="brand" type="text" class="form-control" name="brand"  required>


        </div>
    </div>

    <div class="form-group">
        <label for="family" class="col-md-4 control-label">Familia</label>

        <div class="col-md-6">
            <input id="family" type="text" class="form-control" name="family" required>


        </div>
    </div>

    <div class="form-group">
        <label for="manufacturing_house" class="col-md-4 control-label">Casa de fabricacion</label>

        <div class="col-md-6">
            <input id="manufacturing_house" type="text" class="form-control" name="manufacturing_house" required>


        </div>
    </div>
    <div class="form-group">
        <label for="unit_type" class="col-md-4 control-label">Tipo de Unidad</label>

        <div class="col-md-6">
            <input id="unit_type" type="text" class="form-control" name="unit_type" required>


        </div>
    </div>
    <div class="form-group">
        <label for="department" class="col-md-4 control-label">Departamento</label>

        <div class="col-md-6">
            <input id="department" type="text" class="form-control" name="department" required>


        </div>
    </div>
    <div class="form-group">
        <label for="register_day" class="col-md-4 control-label">Dia de Registro</label>

        <div class="col-md-6">
            <input id="register_day" type="date" class="form-control" name="register_day" required>


        </div>
    </div>
    <div class="form-group">
        <label for="sales_tax" class="col-md-4 control-label">Impuesto</label>

        <div class="col-md-6">
            <input id="sales_tax" type="number" class="form-control" name="sales_tax" required>


        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-4  ">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active"  value=1> activo
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-4 ">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="active"  value=0> inactivo
                </label>
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button id="submit_btn"  type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>
</form>