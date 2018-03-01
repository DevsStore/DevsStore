<form class="form-horizontal" role="form" method="POST" action="./controllers/newcontacto.php">
    <div class="form-group row">
        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="nombre" placeholder="Nombre">
            </div>
    </div>
    <div class="form-group row">
        <label for="correo" class="col-sm-2 control-label">Correo</label>
        <div class="col-sm-10">
            <input class="form-control" type="email" name="correo" placeholder="Correo Electrónico">
        </div>
    </div>
    <div class="form-group row">
            <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
            <div class="col-sm-10">
                <input class="form-control" type="tel" name="telefono" placeholder="Teléfono">
    </div>
    </div>
    <div class="form-group row">
        <label for="mensaje" class="col-sm-2 control-label">Mensaje</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-default enviar">Enviar</button>
        </div>
    </div>
</form>