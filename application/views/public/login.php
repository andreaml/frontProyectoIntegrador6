<div class="container d-flex justify-content-center ">
    <div class="col-12 col-md-6 my-4 div-login">
        <div class="card border-secondary">
            <div class="card-header bg-secondary text-white">
                <h3 class="m-0 text-center">Bienvenido</h3>
            </div>
            <div class="card-body">
                <form novalidate>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" placeholder="Correo" class="form-control" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="contrasenia">Contraseña</label>
                        <input type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña" class="form-control" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </form>
                <input id="btnLogin" type="button" value="INICIAR SESIÓN" class="btn btn-primary float-right">
            </div>
        </div>
    </div>
</div>