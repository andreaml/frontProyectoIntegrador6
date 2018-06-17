<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
    <div class="col-12">
        <h2 class="section-title">Gestión de Stocks</h2>
    </div>
    <div class="row mx-0">
        <div class="col-12 mb-3 div-modelo">
            <div class="card border-secondary">
                <div class="card-body">
                    <div class="row">
                        <div class="col form-group">
                            <label for="categoria">Categoría</label>
                            <select name="idCategoria" id="selectCategoria" class="form-control">
                            </select>
                        </div>
                        <div class="col form-group">
                            <label for="modelo">Modelo</label>
                            <select name="idModelo" id="selectModelo" class="form-control"></select>
                        </div>
                        <div class="col form-group">
                            <label for="anio">Año</label>
                            <select name="anio" id="selectAnio" class="form-control">
                            </select>
                        </div>
                        <div class="col form-group">
                            <label for="version">Versión</label>
                            <select name="version" id="selectVersion" class="form-control">
                            </select>
                        </div>
                    </div>
                    <button id="buscarVehiculos" class="btn btn-info float-right" type="button" data-toggle="collapse" data-target="#caracteristicasModelo">
                        Ver vehículos
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 mb-3 div-modelo">
            <div class="card border-secondary">
                <div class="card-body">
                    <div class="d-flex edition-buttons justify-content-end">
                        <button id="btnAgregarVehiculos" class="btn btn-success" type="button" data-toggle="modal" data-target="#modalAgregar">
                            <i class="fa fa-plus-circle"></i>
                            Agregar Vehículos
                        </button>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div id="filtrosTabla" class="form-inline d-flex justify-content-center px-3 mb-3 ">
                                <label class="my-1 mr-4">FILTROS</label>
                            </div>
                        </div>
                        <table id="tablaStock" class="table table-striped display select compact" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Número de serie</th>
                                    <th>Color</th>
                                    <th>Sucursal</th>
                                    <th>Estatus</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal agregar inicia -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarLabel">Agregar Vehículos a Stock
                    <br>
                    <small class="leyendaModelo"></small>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="modalAgregarSucursal">Sucursal destino</label>
                            <select name="idSucursal" id="modalAgregarSucursal" class="form-control mb-3"></select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="modalAgregarColor">Color</label>
                            <select name="idColor" id="modalAgregarColor" class="form-control mb-3"></select>
                        </div>
                        <label class="px-2">Vehículos </label>
                        <div class="input-group col-12 mb-3">
                            <input type="text" name="numeroSerie" id="modalAgregarNumSerie" placeholder="Número de serie" class="form-control">
                            <div class="input-group-append">
                                <button id="btnAgregarVehiculo" class="btn btn-primary" type="button">Agregar vehículo</button>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <table class="table table-sm" id="vehiculosAgregados">
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="agregarVehiculosStock" type="button" class="btn btn-secondary">Agregar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar inicia -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Editar Vehículo de Stock
                    <br>
                    <small class="leyendaModelo"></small>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form novalidate>
                    <div class="form-row">
                        <div class="form-group col-12 col-md-6">
                            <label for="modalEditarSucursal">Sucursal destino</label>
                            <select name="idSucursal" id="modalEditarSucursal" class="form-control mb-3"></select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="modalEditarColor">Color</label>
                            <select name="idColor" id="modalEditarColor" class="form-control mb-3"></select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="modalEditarNumSerie">Número de serie</label>
                            <input type="text" name="numeroSerie" id="modalEditarNumSerie" class="form-control" required>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalEditar" type="button" class="btn btn-primary">Guardar cambios</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal eliminar inicia -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEliminarLabel">Eliminar Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el stock
                    <b id="modalEliminarIdStock">id stock</b>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>