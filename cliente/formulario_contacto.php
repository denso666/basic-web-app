<?php include("header.php"); ?>

    <div class="container mx-3 text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <form name="formulario">
                    <h3>Formulario contacto</h3>
                    <!-- NOMBRE Y APELLIDOS -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Apellidos</span>
                                <input type="text" class="form-control" name="apellidos">
                            </div>
                        </div>
                    </div>
                    <!-- CORREO -->
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Correo</span>
                            <input type="text" class="form-control" type="email" name="correo" placeholder="@gmail.com">
                        </div>
                        <div class="column" style="display:none;"></div>
                    </div>

                    <!-- BOTONES -->
                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg" type="submit">
                            Enviar
                        </button>
                        <div class="alert alert-danger mt-2" role="alert" id="error_campos" style="display:none;">
                            Faltan campos por llenar!
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
<?php include("footer.php"); ?>