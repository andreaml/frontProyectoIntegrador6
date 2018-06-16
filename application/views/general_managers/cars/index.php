<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
    <div class="col-12">
        <h2 class="section-title">Gestión de Catálogo</h2>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url("public/img/catalogo/catalogo_autosFamiliares.png") ?>" alt="Imagen de autos familiares">
                    <div class="card-body">
                        <h5 class="card-title">Autos familiares</h5>
                        <p class="card-text">
                            Los autos familiares Volkswagen brindan la mejor experiencia tanto en la ciudad como en tus viajes.
                        </p>
                        <p>
                            Su comodidad, seguridad, cajuela amplia y gran rendimiento son características de estos autos Volkswagen, que sin duda a ti y a tu familia les encantarán.
                        </p>
                        <a href="<?= base_url("gerenteGeneral/catalogo/Autos_Familiares") ?>" class="btn btn-primary">Administrar catálogo</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url("public/img/catalogo/catalogo_autosDeportivos.png") ?>" alt="Imagen de autos deportivos">
                    <div class="card-body">
                        <h5 class="card-title">Autos deportivos</h5>
                        <p class="card-text">
                            Son veloces y con estilo. Los autos deportivos Volkswagen son tu dosis de adrenalina de todos los días.
                        </p>
                        <p>
                            Diseños sobresalientes, tecnología avanzada y la potencia necesaria que necesitas en tu camino.
                        </p>
                        <a href="<?= base_url("gerenteGeneral/catalogo/Autos_Deportivos") ?>" class="btn btn-primary">Administrar catálogo</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url("public/img/catalogo/catalogo_camionetas.png") ?>" alt="Imagen de camionetas">
                    <div class="card-body">
                        <h5 class="card-title">Camionetas</h5>
                        <p class="card-text">
                            Las camionetas Volkswagen se caracterizan por su gran espacio, lujo y desempeño.
                        </p>
                        <p>
                            Estos SUV´s familiares están preparados para emprender viajes inolvidables. Sorpréndete con el diseño, equipamiento y tecnología de cada una de nuestras camionetas.
                        </p>
                        <a href="<?= base_url("gerenteGeneral/catalogo/Camionetas") ?>" class="btn btn-primary">Administrar catálogo</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <div class="card">
                    <img class="card-img-top" src="<?= base_url("public/img/catalogo/catalogo_autosNegocios.png") ?>" alt="Imagen de autos para negocios">
                    <div class="card-body">
                        <h5 class="card-title">Autos para negocio</h5>
                        <p class="card-text">
                            Adaptarnos a las necesidades de tu negocio es nuestro negocio.
                        </p>
                        <p>
                            Nuestra gama de Volkswagen Vehículos Comerciales te ofrece lo último en tecnología, un gran espacio para el transporte de carga y la mayor comodidad en el transporte de pasajeros lo que representa la mejor herramienta para los desafíos del día a día.
                        </p>
                        <a href="<?= base_url("gerenteGeneral/catalogo/Autos_Negocios") ?>" class="btn btn-primary">Administrar catálogo</a>
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
                <h5 class="modal-title" id="modalAgregarLabel">Agregar Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                        <div class="form-group">
                        <label for="modalAgregarModelo">Modelo</label>
                        <input type="text" name="modelo" id="modelo" placeholder="Modelo del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarAnio">Año</label>
                        <input type="text" name="anio" id="anio" placeholder="Año del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarNombre">Color</label>
                        <input type="text" name="color" id="color" placeholder="Color del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarVersion">Versión</label>
                            <input type="text" name="version" id="version" placeholder="Versión del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarTransmision">Transmisión</label>
                        <input type="text" name="transmision" id="transmision" placeholder="Transmisión del vehículo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="aireAcondicionado">Aire acondicionado</label>
                        <select name="aireAcondicionado" id="aireAcondicionado" class="form-control">
                            <option value="0">Si</option>
                            <option value="1">No</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarbolsasAire">Bolsas de Aire</label>
                        <input type="number" name="bolsasAire" id="bolsasAire" placeholder="Número de Bolsas de Aire" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregartipoFrenos">Tipos de Frenos</label>
                        <input type="text" name="tipoFrenos" id="tipoFrenos" placeholder="Tipos de Frenos" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarCilindrada">No. Cilindros</label>
                        <input type="number" name="cilindrada" id="cilindrada" placeholder="Número de Cilindros" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarEquipamiento">Equipamiento</label>
                        <input type="text" name="equipamiento" id="equipamiento" placeholder="Equipamientos del vehículo" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="modalAgregarDisponibilidad">Disponibilidad</label>
                        <input type="text" name="disponibilidad" id="disponibilidad" placeholder="Vehículos Disponibles" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="modalAgregarPrecio">Precio</label>
                        <input type="text" name="precio" id="precio" placeholder="Precio del vehículo" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="modalAgregarPuertas">No. de Puertas</label>
                        <input type="text" name="puertas" id="puertas" placeholder="Número de Puertas" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarCombustible">Combustible</label>
                        <input type="text" name="Combustible" id="combustible" placeholder="Tipo de Combustible" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarPotencia">Potencia</label>
                        <input type="text" name="potencia" id="potencia" placeholder="Potencia del vehículo" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="categoria">Categoria</label>
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