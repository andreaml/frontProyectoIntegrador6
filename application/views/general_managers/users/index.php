<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
    <div class="col-12">
        <h2 class="section-title">Gestión de Usuarios</h2>
        <div class="d-flex edition-buttons justify-content-end">
            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modalAgregar">
                <i class="fa fa-plus-circle"></i>
                Agregar Usuario
            </button>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div id="filtrosTabla" class="form-inline d-flex justify-content-center px-3 mb-3 ">
                    <label class="my-1 mr-4">FILTROS</label>
                </div>
            </div>
            <table id="tablaUsuarios" class="table table-striped display select compact" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            <input name="select_all" value="1" id="example-select-all" type="checkbox">
                        </th>
                        <th>ID Trabajador</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Dirección</th>
                        <th>Sucursal</th>
                        <th>Rol</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="d-flex edition-buttons justify-content-end">
            <button id="btnEliminarUsuario" class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalEliminar" disabled>
                <i class="fa fa-trash"></i>
                Eliminar Usuario
            </button>
        </div>
</section>

<!-- Modal agregar inicia -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarLabel">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-group">
                        <label for="modalAgregarNombre">* Nombre</label>
                        <input type="text" name="nombre" id="modalAgregarNombre" placeholder="Nombre de Usuario" class="form-control" maxlength="30"
                            required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalAgregarAP">* Apellido Paterno</label>
                            <input type="text" name="apellidoPaterno" id="modalAgregarAP" placeholder="Apellido Paterno de Usuario" class="form-control"
                                maxlength="20" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalAgregarAM">* Apellido Materno</label>
                            <input type="text" name="apellidoMaterno" id="modalAgregarAM" placeholder="Apellido Materno de Usuario" class="form-control"
                                maxlength="20" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="modalAgregarTelefono">* Teléfono</label>
                            <div class="input-group">
                                <input type="tel" name="telefono" id="modalAgregarTelefono" placeholder="Teléfono de usuario" class="form-control" required
                                    pattern="[0-9]{10}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" data-toggle="popover" data-placement="top" data-content="Ejemplo: 3124445522">
                                        <i class="fa fa-question-circle"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalAgregarCorreo">* Correo electrónico</label>
                            <input type="email" name="correo" id="modalAgregarCorreo" placeholder="Correo electrónico" class="form-control" required>
                            <div class="invalid-feedback"></div>
                            <input type="hidden" name="contrasenia" id="modalAgregarContrasenia">
                            <input type="hidden" name="idUsuarioCreador" id="modalAgregarUsuarioCreador">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarDireccion">* Dirección</label>
                        <textarea name="direccion" id="modalAgregarDireccion" cols="30" rows="2" placeholder="Dirección de sucursal" class="form-control"
                            minlength="15" maxlength="80" required></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <hr class="my-4">
                    <div class="form-row">
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalAgregarSucursal">* Sucursal</label>
                            <select name="idSucursal" id="modalAgregarSucursal" class="form-control" required></select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalAgregarRol">Tipo de Usuario</label>
                            <select name="idRol" id="modalAgregarRol" class="form-control" required></select>
                            <div class="invalid-feedback"></div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalAgregar" type="button" class="btn btn-secondary">Agregar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal agregar termina -->
<!-- Modal editar inicia -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-group">
                        <label for="modalEditarNombre">* Nombre</label>
                        <input type="text" name="nombre" id="modalEditarNombre" placeholder="Nombre de Usuario" class="form-control" maxlength="30"
                            required>
                        <div class="invalid-feedback"></div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalEditarAP">* Apellido Paterno</label>
                            <input type="text" name="apellidoPaterno" id="modalEditarAP" placeholder="Apellido Paterno de Usuario" class="form-control"
                                maxlength="20" required>
                            <div class="invalid-feedback"></div>

                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalEditarAM">* Apellido Materno</label>
                            <input type="text" name="apellidoMaterno" id="modalEditarAM" placeholder="Apellido Materno de Usuario" class="form-control"
                                maxlength="20" required>
                            <div class="invalid-feedback"></div>

                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalEditarTelefono">* Teléfono</label>
                            <input type="text" name="telefono" id="modalEditarTelefono" placeholder="Teléfono de sucursal" class="form-control" pattern="[0-9]{10}"
                                required>
                            <div class="invalid-feedback"></div>

                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalEditarCorreo">* Correo electrónico</label>
                            <input type="email" name="correo" id="modalEditarCorreo" placeholder="Correo electrónico" class="form-control">
                            <div class="invalid-feedback"></div>
                            <input type="hidden" name="idUsuarioCreador" id="modalEditarUsuarioCreador" class="form-control">
                            <input type="hidden" name="idRelacion" id="modalEditarIdRelacion" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="modalEditarDireccion">* Dirección</label>
                        <textarea name="direccion" id="modalEditarDireccion" cols="30" rows="2" placeholder="Dirección de sucursal" class="form-control"
                            minlength="15" maxlength="80" required></textarea>
                        <div class="invalid-feedback"></div>

                    </div>
                    <hr class="my-4">
                    <div class="form-row">
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalEditarSucursal">* Sucursal</label>
                            <select name="idSucursal" id="modalEditarSucursal" class="form-control" required></select>
                            <div class="invalid-feedback"></div>

                        </div>
                        <div class="form-group col-12 col-sm-6">
                            <label for="modalEditarRol">* Tipo de Usuario</label>
                            <select name="idRol" id="modalEditarRol" class="form-control" required></select>
                            <div class="invalid-feedback"></div>

                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalEditar" type="button" class="btn btn-secondary">Editar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal editar termina -->
<!-- Modal eliminar inicia -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar los siguientes usuarios?</p>
                <ul id="modalEliminarIdUsuario">
                </ul>
            </div>
            <div class="modal-footer">
                <button id="btnModalEliminar" type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>