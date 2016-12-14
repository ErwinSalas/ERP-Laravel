<form class="form-horizontal" role="form" id="edit_form">


    <div class="form-group">
        <label for="name" class="col-md-4 control-label">Nombre</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{$client->name}}" required autofocus>


        </div>
    </div>

    <div class="form-group">
        <label for="id" class="col-md-4 control-label">Cedula</label>

        <div class="col-md-6">
            <input id="id" type="text" class="form-control" name="id" value="{{$client->id}}"  required>


        </div>
    </div>

    <div class="form-group">
        <label for="last_name" class="col-md-4 control-label">Apellido        </label>

        <div class="col-md-6">
            <input id="last_name" type="text" class="form-control" name="last_name" value="{{$client->last_name}}" required>


        </div>
    </div>

    <div class="form-group">
        <label for="address" class="col-md-4 control-label">Direccion</label>

        <div class="col-md-6">
            <input id="address" type="text" class="form-control" name="address" value="{{$client->address}}" required>


        </div>
    </div>
    <div class="form-group">
        <label for="civil_state" class="col-md-4 control-label">Estado Civil</label>

        <div class="col-md-6">
            <select id="civil_state"  class="form-control" name="civil_state" required data-defaultValue="{{$client->civil_state}}">
                <option value="Casado">Casado</option>
                <option value="Soltero">Soltero</option>
            </select>


        </div>
    </div>
    <div class="form-group">
        <label for="birthday" class="col-md-4 control-label">Fecha de Nacimient</label>

        <div class="col-md-6">
            <input id="birthday" type="date" class="form-control" name="birthday" value="{{$client->birthday}}" required>


        </div>
    </div>
    <div class="form-group">
        <label for="sex" class="col-md-4 control-label">sexo</label>

        <div class="col-md-6">
            <select id="sex"  class="form-control" name="sex" data-defaultValue="{{$client->name}}" required>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
            </select>


        </div>
    </div>
    <div class="form-group">
        <label for="register_day" class="col-md-4 control-label">Impuesto</label>

        <div class="col-md-6">
            <input id="register_day" type="date" class="form-control" name="register_day" value="{{$client->register_day}}" required>


        </div>
    </div>

    <div class="form-group">
        <label for="type" class="col-md-4 control-label">Tipo: </label>

        <div class="col-md-6">
            <select id="type"  class="form-control" name="type" data-defaultValue="{{$client->type}}" required>
                <option value="Detallista">Detallista</option>
                <option value="Mayoreo">Mayoreo</option>
            </select>


        </div>
    </div>
    <div class="form-group">
        <label for="discount" class="col-md-4 control-label">Descuento: </label>

        <div class="col-md-6">
            <input id="discount" type="number" class="form-control" name="discount" value="{{$client->discount}}" required>


        </div>
    </div>



    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button id="edit_btn" onclick="actualizar({{$client->id}})"  class="btn btn-primary">
                actualizar
            </button>
        </div>
    </div>
</form>