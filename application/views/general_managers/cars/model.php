<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
    <div class="col-12">
        <h2 class="section-title">Gestión de Catálogo -
            <span class="nombreCategoria">
                <?= $category ?>
            </span>
        </h2>
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 div-modelo">
                <div class="card border-secondary">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="m-0">Modelos disponibles</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex edition-buttons justify-content-end px-3">
                            <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modalAgregar">
                                <i class="fa fa-plus-circle"></i>
                                Agregar Modelo
                            </button>
                        </div>
                        <div class="row mx-0">
                            <table id="tablaModelos" class="table table-striped display select compact" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse col-12 col-lg-6 mb-4" id="caracteristicasModelo">
                <div class="card border-secondary">
                    <div class="card-header bg-secondary text-white d-flex justify-content-between">
                        <h4 class="nombre-modelo m-0"></h4>
                        <div class="btn-group dropleft">
                            <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fa fa-ellipsis-v"></span>
                            </button>
                            <div class="dropdown-menu">
                                <button id="btnEditar" class="dropdown-item" type="button" data-toggle="modal" data-target="#modalEditar">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Editar modelo
                                </button>
                                <button class="dropdown-item" type="button">
                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                    Deshabilitar modelo
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mx-0">
                            <div class="col-12 col-md-7 px-0">
                                <h5>Características</h5>
                                <table class="table table-striped" id="tablaCaracteristicasModelo">
                                    <tbody>
                                        <tr>
                                            <th>Precio</th>
                                            <td>$
                                                <span class="precio"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Categoría</th>
                                            <td>
                                                <span class="categoria"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Modelo</th>
                                            <td>
                                                <span class="modelo"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Año</th>
                                            <td>
                                                <span class="anio"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Versión</th>
                                            <td>
                                                <span class="version"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Aire acondicionado</th>
                                            <td>
                                                <span class="aireAcondicionado"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bolsas de aire</th>
                                            <td>
                                                <span class="bolsasAire"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tipo de freno</th>
                                            <td>
                                                <span class="tipoFreno"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Cilindrada</th>
                                            <td>
                                                <span class="cilindrada"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Equipamiento</th>
                                            <td>
                                                <span class="equipamiento"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Número de puertas</th>
                                            <td>
                                                <span class="numPuertas"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Número de pasajeros</th>
                                            <td>
                                                <span class="numPasajeros"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tipo de combustible</th>
                                            <td>
                                                <span class="tipoCombustible"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Potencia</th>
                                            <td>
                                                <span class="potencia"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tipo de transmisión</th>
                                            <td>
                                                <span class="tipoTransmision"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-md-5 pr-0">
                                <button class="btn btn-secondary btn-block my-3" type="button" data-toggle="collapse" data-target="#caracteristicasModelo">
                                    <i class="fa fa-window-restore fa-2x" aria-hidden="true"></i>
                                    <br> Comparar este modelo
                                </button>
                                <a href="<?= base_url("gerenteGeneral/stocks") ?>" class="btn btn-primary btn-block my-3" >
                                    <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
                                    <br> Gestionar vehículos
                                </a>
                                <h5>Colores disponibles
                                    <div class="btn-group dropleft">
                                        <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-ellipsis-v"></span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button id="btnEditar" class="dropdown-item" type="button" data-toggle="modal" data-target="#modalGestionarColoresModelo">
                                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                                Gestionar colores de modelo
                                            </button>
                                        </div>
                                    </div>
                                </h5>
                                <div id="coloresDisponibles">
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal agregar inicia -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarLabel">
                    <span class="nombreCategoria small">Autos familiares</span>
                    <br>Agregar Modelo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-row">
                        <div class="form-group col-8 col-sm-9 col-md-5">
                            <label for="modalAgregarModelo">Modelo</label>
                            <input type="text" name="modelo" id="modalAgregarModelo" placeholder="Polo" class="form-control" maxlength="20" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-4 col-sm-3">
                            <label for="modalAgregarAnio">Año</label>
                            <input type="text" name="anio" id="modalAgregarAnio" placeholder="2018" class="form-control" maxlength="4" pattern="[0-9]{4}"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col-sm-7 col-md-4">
                            <label for="modalAgregarVersion">Versión</label>
                            <input type="text" name="version" id="modalAgregarVersion" placeholder="CGI" class="form-control" maxlength="30" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col-sm-5 col-md-4">
                            <label for="modalAgregarPrecio">Precio</label>
                            <input type="number" name="precio" id="modalAgregarPrecio" placeholder="Precio del vehículo" class="form-control" min="50000"
                                max="1000000" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="my-3">
                        <h6 class="mb-0">
                            <b>Características</b>
                        </h6>
                        <hr class="mt-0">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarTransmision">Transmisión</label>
                            <input type="text" name="tipoTransmision" id="modalAgregarTransmision" placeholder="Manual" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarAireAcondicionado">Aire acondicionado</label>
                            <select name="aireAcondicionado" id="modalAgregarAireAcondicionado" class="form-control" required>
                                <option value="\1">Si</option>
                                <option value="\0">No</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarbolsasAire">Bolsas de Aire</label>
                            <input type="number" name="bolsasAire" id="modalAgregarbolsasAire" placeholder="5" min="0" max="10" class="form-control"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregartipoFreno">Tipos de Frenos</label>
                            <input type="text" name="tipoFreno" id="modalAgregartipoFreno" placeholder="ABS" class="form-control" maxlength="30" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarCilindrada">No. Cilindros</label>
                            <input type="number" name="cilindrada" id="modalAgregarCilindrada" placeholder="8" min="3" max="20" class="form-control"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarNumPuertas">No. de Puertas</label>
                            <input type="number" name="numPuertas" id="modalAgregarNumPuertas" placeholder="4" min="2" max="8" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarNumPasajeros">No. de Pasajeros</label>
                            <input type="number" name="numPasajeros" id="modalAgregarNumPasajeros" placeholder="4" min="2" max="8" class="form-control"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarTipoCombustible">Tipo de combustible</label>
                            <input type="text" name="tipoCombustible" id="modalAgregarTipoCombustible" placeholder="Tipo de Combustible" class="form-control"
                                maxlength="7" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarPotencia">Potencia</label>
                            <input type="text" name="potencia" id="modalAgregarPotencia" placeholder="Potencia del vehículo" class="form-control" maxlength="8"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col">
                            <label for="modalAgregarEquipamiento">Equipamiento</label>
                            <textarea name="equipamiento" id="modalAgregarEquipamiento" class="form-control" rows="3" maxlength="255" required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalAgregarModelo" type="button" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal agregar termina -->
<!-- Modal editar inicia -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Editar Modelo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-row">
                        <div class="form-group col-8 col-sm-9 col-md-5">
                            <label for="modalEditarModelo">Modelo</label>
                            <input type="text" name="modelo" id="modalEditarModelo" placeholder="Polo" class="form-control" maxlength="20" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-4 col-sm-3">
                            <label for="modalEditarAnio">Año</label>
                            <input type="text" name="anio" id="modalEditarAnio" placeholder="2018" class="form-control" maxlength="4" pattern="[0-9]{4}"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col-sm-7 col-md-4">
                            <label for="modalEditarVersion">Versión</label>
                            <input type="text" name="version" id="modalEditarVersion" placeholder="CGI" class="form-control" maxlength="30" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col-sm-5 col-md-4">
                            <label for="modalEditarPrecio">Precio</label>
                            <input type="number" name="precio" id="modalEditarPrecio" placeholder="Precio del vehículo" class="form-control" min="50000"
                                max="1000000" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="my-3">
                        <h6 class="mb-0">
                            <b>Características</b>
                        </h6>
                        <hr class="mt-0">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarTransmision">Transmisión</label>
                            <input type="text" name="tipoTransmision" id="modalEditarTransmision" placeholder="Manual" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarAireAcondicionado">Aire acondicionado</label>
                            <select name="aireAcondicionado" id="modalEditarAireAcondicionado" class="form-control" required>
                                <option value="\1">Si</option>
                                <option value="\0">No</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarbolsasAire">Bolsas de Aire</label>
                            <input type="number" name="bolsasAire" id="modalEditarbolsasAire" placeholder="5" min="0" max="10" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditartipoFreno">Tipos de Frenos</label>
                            <input type="text" name="tipoFreno" id="modalEditartipoFreno" placeholder="ABS" class="form-control" maxlength="30" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarCilindrada">No. Cilindros</label>
                            <input type="number" name="cilindrada" id="modalEditarCilindrada" placeholder="8" min="3" max="20" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarNumPuertas">No. de Puertas</label>
                            <input type="number" name="numPuertas" id="modalEditarNumPuertas" placeholder="4" min="2" max="8" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarNumPasajeros">No. de Pasajeros</label>
                            <input type="number" name="numPasajeros" id="modalEditarNumPasajeros" placeholder="4" min="2" max="8" class="form-control"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarTipoCombustible">Tipo de combustible</label>
                            <input type="text" name="tipoCombustible" id="modalEditarTipoCombustible" placeholder="Tipo de Combustible" class="form-control"
                                maxlength="7" required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalEditarPotencia">Potencia</label>
                            <input type="text" name="potencia" id="modalEditarPotencia" placeholder="Potencia del vehículo" class="form-control" maxlength="8"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group col-12 col">
                            <label for="modalEditarEquipamiento">Equipamiento</label>
                            <textarea name="equipamiento" id="modalEditarEquipamiento" class="form-control" rows="3" maxlength="255" required></textarea>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalEditarModelo" type="button" class="btn btn-primary">Editar</button>
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
                <h5 class="modal-title" id="modalEliminarLabel">Deshabilitar Vehículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el modelo
                    <b id="modalEliminarIdVehiculo">nombre modelo</b>?</p>
                <p>Una vez que lo haga, no podrá activarlo de nuevo.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal eliminar termina -->
<!-- Modal gestionar colores por modelo inicia -->
<div class="modal fade" id="modalGestionarColoresModelo" tabindex="-1" role="dialog" aria-labelledby="modalGestionarColoresModeloLabel"
    data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalGestionarColoresModeloLabel">
                    Gestionar colores de modelo
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="selectColores">Colores disponibles</label>
                            <select name="color" id="selectColores" class="form-control mb-3"></select>
                            <button type="button" class="btn btn-primary float-right" id="btnVincularColorModelo">
                                <i class="fa fa-plus-circle"></i>
                                Vincular color
                            </button>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label>Colores vinculados</label>
                            <table class="table table-sm" id="coloresVinculados">
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal gestionar colores por modelo termina -->
<!-- Modal imagenes inicia -->
<div class="modal fade" id="modalCarrusel" tabindex="-1" role="dialog" aria-labelledby="modalCarruselLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCarruselLabel">Galería</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carruselImagenes" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner"></div>
                    <a class="carousel-control-prev" href="#carruselImagenes" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carruselImagenes" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <form id="formImagen" method="POST" action="" enctype="multipart/form-data" novalidate>
                    <div class="input-group mt-3">
                        <div class="custom-file">
                            <input type="hidden" name="nombre_imagen">
                            <input type="hidden" name="idModeloVehiculo">
                            <input type="hidden" name="idColor">
                            <input type="file" name="userfile" class="custom-file-input" accept=".jpg, .jpeg, .png" required>
                            <label for="logo" class="custom-file-label">Examinar...</label>
                        </div>
                        <div class="input-group-append">
                            <button id="btnSubirImagen" class="btn btn-primary" type="button">
                                <i class="fa fa-upload"></i>
                                Subir
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal imagenes termina -->
<!-- Modal imagenes inicia -->
<div class="modal fade" id="modalAgregarImagen" tabindex="-1" role="dialog" aria-labelledby="modalAgregarImagenLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarImagenLabel">Agregar imagen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAgregarImagen" method="POST" action="" enctype="multipart/form-data" novalidate>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="hidden" name="nombre_imagen">
                            <input type="hidden" name="idModeloVehiculo">
                            <input type="hidden" name="idColor">
                            <input type="file" name="userfile" class="custom-file-input" accept=".jpg, .jpeg, .png" required>
                            <label for="logo" class="custom-file-label">Examinar...</label>
                        </div>
                        <div class="input-group-append">
                            <button id="btnAgregarImagen" class="btn btn-primary" type="button">
                                <i class="fa fa-upload"></i>
                                Subir
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal imagenes termina -->
<script>
    var idCategoria = <?= $idCategory ?>;
</script>