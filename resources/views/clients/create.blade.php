<form class="form-horizontal" role="form" method="POST" action="{{ url('/clients') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name"  required autofocus>


        </div>
    </div>

    <div class="form-group">
        <label for="id" class="col-md-4 control-label">Cedula</label>

        <div class="col-md-6">
            <input id="id" type="text" class="form-control" name="id"  required>


        </div>
    </div>

    <div class="form-group">
        <label for="last_name" class="col-md-4 control-label">Apellido        </label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control" name="last_name" required>


        </div>
    </div>

    <div class="form-group">
        <label for="address" class="col-md-4 control-label">Direccion</label>

        <div class="col-md-6">
            <input id="address" type="text" class="form-control" name="address" required>


        </div>
    </div>
    <div class="form-group">
        <label for="civil_state" class="col-md-4 control-label">Estado Civil</label>

        <div class="col-md-6">
            <select id="civil_state"  class="form-control" name="civil_state" required>
                <option value="Casado">Casado</option>
                <option value="Soltero">Soltero</option>
            </select>


        </div>
    </div>
    <div class="form-group">
        <label for="birthday" class="col-md-4 control-label">Fecha de Nacimient</label>

        <div class="col-md-6">
            <input id="birthday" type="date" class="form-control" name="birthday" required>


        </div>
    </div>
    <div class="form-group">
        <label for="sex" class="col-md-4 control-label">sexo</label>

        <div class="col-md-6">
            <select id="sex"  class="form-control" name="sex" required>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>


        </div>
    </div>
    <div class="form-group">
        <label for="register_day" class="col-md-4 control-label">Registro</label>

        <div class="col-md-6">
            <input id="register_day" type="date" class="form-control" name="register_day" required>


        </div>
    </div>

    <div class="form-group">
        <label for="type" class="col-md-4 control-label">tipo</label>

        <div class="col-md-6">
            <select id="type"  class="form-control" name="type" required>
                <option value="Detallista">Detallista</option>
                <option value="Mayoreo">Mayoreo</option>
            </select>


        </div>
    </div>
    <div class="form-group">
        <label for="discount" class="col-md-4 control-label">Descuento</label>

        <div class="col-md-6">
            <input id="discount" type="number" class="form-control" name="discount" required>


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