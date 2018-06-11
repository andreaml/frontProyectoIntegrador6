<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
    <div class="col-12">
        <h2 class="section-title">Gestión de Catálogo - <span class="nombreCategoria"><?= $category ?></span></h2>
        
        <div class="row">
            <div class="col-12 col-lg-6 mb-3 div-modelo">
                <div class="card border-secondary">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="nombre-modelo m-0">Modelos disponibles</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex edition-buttons justify-content-end px-3">
                            <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalAgregar">
                                <i class="fa fa-plus-circle"></i>
                                Agregar Modelo
                            </button>
                        </div>
                        <div class="row mx-0">
                            <table id="tablaModelos" class="table table-striped display select compact" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            <input name="select_all" value="1" id="example-select-all" type="checkbox">
                                        </th>
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
                        <div class="card-header bg-secondary text-white">
                            <h4 class="nombre-modelo m-0">Vento</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="col-12 col-md-7 px-0">
                                    <h5>Características</h5>
                                    <table class="table table-striped" id="tablaCaracteristicasModelo">
                                        <tbody>
                                            <tr>
                                                <th>Precio</th>
                                                <td>$<span class="precio"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Categoría</th>
                                                <td><span class="categoria"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Modelo</th>
                                                <td><span class="modelo"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Año</th>
                                                <td><span class="anio"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Versión</th>
                                                <td><span class="version"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Aire acondicionado</th>
                                                <td><span class="aireAcondicionado"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Bolsas de aire</th>
                                                <td><span class="bolsasAire"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de freno</th>
                                                <td><span class="tipoFreno"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Cilindrada</th>
                                                <td><span class="cilindrada"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Equipamiento</th>
                                                <td><span class="equipamiento"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Número de puertas</th>
                                                <td><span class="numPuertas"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Número de pasajeros</th>
                                                <td><span class="numPasajeros"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de combustible</th>
                                                <td><span class="tipoCombustible"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Potencia</th>
                                                <td><span class="potencia"></span></td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de transmisión</th>
                                                <td><span class="tipoTransmision"></span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-12 col-md-5 pr-0">
                                    <h5>Colores disponibles</h5>
                                    <img src="img/catalogo/catalogo_autosDeportivos.png" alt="" class="img-fluid">
                                    <button class="btn btn-secondary btn-block my-3" type="button" data-toggle="collapse" data-target="#caracteristicasModelo">
                                        <i class="fa fa-window-restore fa-2x" aria-hidden="true"></i> <br>
                                        Comparar este vehículo
                                    </button>
                                    <h5>Vehículos</h5>
                                    <button class="btn btn-primary btn-block my-3" type="button" data-toggle="collapse" data-target="#caracteristicasModelo">
                                        <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i> <br>
                                        Gestionar vehículos
                                    </button>
                                    <button class="btn btn-success btn-block my-3" type="button" data-toggle="collapse" data-target="#caracteristicasModelo">
                                        <i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i> <br>
                                        Iniciar proceso de venta
                                    </button>
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
                <h5 class="modal-title" id="modalAgregarLabel"><span class="nombreCategoria small">Autos familiares</span><br>Agregar Modelo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-row">
                        <div class="form-group col-8 col-sm-9 col-md-5">
                            <label for="modalAgregarModelo">Modelo</label>
                            <input type="text" name="modelo" id="modalAgregarModelo" placeholder="Polo" class="form-control">
                        </div>
                        <div class="form-group col-4 col-sm-3">
                            <label for="modalAgregarAnio">Año</label>
                            <input type="text" name="anio" id="modalAgregarAnio" placeholder="2018" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-7 col-md-4">
                            <label for="modalAgregarVersion">Versión</label>
                            <input type="text" name="version" id="version" placeholder="CGI" class="form-control">
                        </div>
                        <div class="form-group col-12 col-sm-5 col-md-4">
                            <label for="modalAgregarPrecio">Precio</label>
                            <input type="text" name="precio" id="precio" placeholder="Precio del vehículo" class="form-control">
                        </div>
                    </div>
                    <div class="my-3">
                        <h6 class="mb-0"><b>Características</b></h6>
                        <hr class="mt-0">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarTransmision">Transmisión</label>
                            <input type="text" name="transmision" id="transmision" placeholder="Manual" class="form-control">
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="aireAcondicionado">Aire acondicionado</label>
                            <select name="aireAcondicionado" id="aireAcondicionado" class="form-control">
                                <option value="0">Si</option>
                                <option value="1">No</option>                            
                            </select>
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarbolsasAire">Bolsas de Aire</label>
                            <input type="number" name="bolsasAire" id="bolsasAire" placeholder="5" min="0" max="10" class="form-control">
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregartipoFrenos">Tipos de Frenos</label>
                            <input type="text" name="tipoFrenos" id="tipoFrenos" placeholder="ABS" class="form-control">
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarCilindrada">No. Cilindros</label>
                            <input type="number" name="cilindrada" id="cilindrada" placeholder="8" min="3" max="20" class="form-control">
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarPuertas">No. de Puertas</label>
                            <input type="number" name="puertas" id="puertas" placeholder="4" min="2" max="8" class="form-control">
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarCombustible">Combustible</label>
                            <input type="text" name="Combustible" id="combustible" placeholder="Tipo de Combustible" class="form-control">
                        </div>
                        <div class="form-group col-6 col-sm-3">
                            <label for="modalAgregarPotencia">Potencia</label>
                            <input type="text" name="potencia" id="potencia" placeholder="Potencia del vehículo" class="form-control">
                        </div>
                        <div class="form-group col-12 col">
                            <label for="modalAgregarEquipamiento">Equipamiento</label>
                            <textarea name="equipamiento" id="equipamiento" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Agregar</button>
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
                <form>
                        <div class="form-group">
                        <label for="modalEditarModelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo" placeholder="Modelo del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarAnio">Año</label>
                        <input type="text" name="anio" id="anio" placeholder="Año del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarNombre">Color</label>
                        <input type="text" name="color" id="color" placeholder="Color del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarVersion">Versión</label>
                            <input type="text" name="version" id="version" placeholder="Versión del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarTransmision">Transmisión</label>
                        <input type="text" name="transmision" id="transmision" placeholder="Transmisión del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="EditaraireAcondicionado">Aire acondicionado</label>
                        <select name="aireAcondicionado" id="aireAcondicionado" class="form-control">
                            <option value="0">Si</option>
                            <option value="1">No</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modalEditarbolsasAire">Bolsas de Aire</label>
                        <input type="number" name="bolsasAire" id="bolsasAire" placeholder="Número de Bolsas de Aire" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditartipoFrenos">Tipos de Frenos</label>
                        <input type="text" name="tipoFrenos" id="tipoFrenos" placeholder="Tipos de Frenos" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarCilindrada">No. Cilindros</label>
                        <input type="number" name="cilindrada" id="cilindrada" placeholder="Número de Cilindros" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarEquipamiento">Equipamiento</label>
                        <input type="text" name="equipamiento" id="equipamiento" placeholder="Equipamientos del vehículo" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="modalEditarDisponibilidad">Disponibilidad</label>
                        <input type="text" name="disponibilidad" id="disponibilidad" placeholder="Vehículos Disponibles" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="modalEditarPrecio">Precio</label>
                        <input type="text" name="precio" id="precio" placeholder="Precio del vehículo" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="modalEditarPuertas">No. de Puertas</label>
                        <input type="text" name="puertas" id="puertas" placeholder="Número de Puertas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarCombustible">Combustible</label>
                        <input type="text" name="Combustible" id="combustible" placeholder="Tipo de Combustible" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalEditarPotencia">Potencia</label>
                        <input type="text" name="potencia" id="potencia" placeholder="Potencia del vehículo" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="Editarcategoria">Categoria</label>
                        <select name="categoria" id="categoria" class="form-control">
                            <option value="0">Categoría del vehículo</option>
                            <option value="1">Autos Familiares</option>
                            <option value="2">Autos Compactos</option>
                            <option value="3">Autos Deportivos</option>
                            <option value="4">Camionetas</option>                            
                        </select>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Editar</button>
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
                <h5 class="modal-title" id="modalEliminarLabel">Eliminar Vehículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el Vehículo <b id="modalEliminarIdVehiculo">id Vehículo</b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div> 
<!-- Modal eliminar termina -->
<script>
    
    var idCategoria = <?= $idCategory ?>;
</script>