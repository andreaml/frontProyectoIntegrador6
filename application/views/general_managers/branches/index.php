<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
    <div class="col-12">
        <h2 class="section-title">Gestión de Sucursales</h2>
        <div class="d-flex edition-buttons justify-content-end">
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalAgregar">
                <i class="fa fa-plus-circle"></i>
                Agregar Sucursal
            </button>
        </div>
        <div class="row mb-3">
            <table id="tablaSucursales" class="table table-striped display select compact" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            <input name="select_all" value="1" id="example-select-all" type="checkbox">
                        </th>
                        <th>ID Sucursal</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Estatus</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="d-flex edition-buttons justify-content-end">
            <button id="btnDeshabilitarSucursal" class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalDeshabilitar">
                <i class="fa fa-ban"></i>
                Deshabilitar Sucursal
            </button>
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
                <form class="needs-validation" novalidate>
                        <div class="form-group">
                        <label for="modalAgregarNombre">* Nombre</label>
                        <input type="text" name="sucursal" id="sucursal" placeholder="Nombre de sucursal" class="form-control" required minlength="5">
                        <div class="invalid-feedback"></div>
                    </div>
                    <label for="modalAgregarTelefono">* Teléfono</label>
                    <div class="input-group mb-3">
                        <input type="tel" name="telefono" id="telefono" placeholder="Teléfono de sucursal" class="form-control" required pattern="[0-9]{10}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="popover" data-placement="top" data-content="Ejemplo: 3124445522">
                                <i class="fa fa-question-circle"></i>
                            </button>
                            </div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarDireccion">* Dirección</label>
                        <textarea name="direccion" id="direccion" cols="30" rows="3" placeholder="Dirección de sucursal" class="form-control" required minlength="15"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="modalAgregarCiudad">* Ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad de sucursal" class="form-control" required minlength="5">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="Estado">* Estado</label>
                        <select name="estado" id="estado" class="form-control" required>
                            <option value="">Selecciona un estado</option>                    
                            <option value="Aguascalientes">Aguascalientes</option>                    
                            <option value="Baja California">Baja California</option>                    
                            <option value="Baja California Sur">Baja California Sur</option>                    
                            <option value="Campeche">Campeche</option>                    
                            <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>                    
                            <option value="Colima">Colima</option>                    
                            <option value="Chiapas">Chiapas</option>                    
                            <option value="Chihuahua">Chihuahua</option>                    
                            <option value="Distrito Federal">Distrito Federal</option>                    
                            <option value="Durango">Durango</option>                    
                            <option value="Guanajuato">Guanajuato</option>                    
                            <option value="Guerrero">Guerrero</option>                    
                            <option value="Hidalgo">Hidalgo</option>                    
                            <option value="Jalisco">Jalisco</option>                    
                            <option value="México">México</option>                    
                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>                    
                            <option value="Morelos">Morelos</option>                    
                            <option value="Nayarit">Nayarit</option>                    
                            <option value="Nuevo León">Nuevo León</option>                    
                            <option value="Oaxaca">Oaxaca</option>                    
                            <option value="Puebla">Puebla</option>                    
                            <option value="Querétaro">Querétaro</option>                    
                            <option value="Quintana Roo">Quintana Roo</option>                    
                            <option value="San Luis Potosí">San Luis Potosí</option>                    
                            <option value="Sinaloa">Sinaloa</option>                    
                            <option value="Sonora">Sonora</option>                    
                            <option value="Tabasco">Tabasco</option>                    
                            <option value="Tamaulipas">Tamaulipas</option>                    
                            <option value="Tlaxcala">Tlaxcala</option>                    
                            <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>                    
                            <option value="Yucatán">Yucatán</option>                    
                            <option value="Zacatecas">Zacatecas</option>                    
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalAgregarSucursal" type="button" class="btn btn-primary">Agregar</button>
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
                <h5 class="modal-title" id="modalEditarLabel">Editar Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                        <div class="form-group">
                        <label for="mEditarNombre">* Nombre</label>
                        <input type="text" name="sucursal" id="mEditarNombre" placeholder="Nombre de sucursal" class="form-control" required minlength="5">
                        <div class="invalid-feedback"></div>
                    </div>
                    <label for="mEditarTelefono">* Teléfono</label>
                    <div class="input-group mb-3">
                        <input type="text" name="telefono" id="mEditarTelefono" placeholder="Teléfono de sucursal" class="form-control"required pattern="[0-9]{10}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" data-toggle="popover" data-placement="top" data-content="Ejemplo: 3124445522">
                                <i class="fa fa-question-circle"></i>
                            </button>
                            </div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="mEditarDireccion">* Dirección</label>
                        <textarea name="direccion" id="mEditarDireccion" cols="30" rows="3" placeholder="Dirección de sucursal" class="form-control" required minlength="15"></textarea>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                        <label for="mEditarCiudad">* Ciudad</label>
                        <input type="text" name="ciudad" id="mEditarCiudad" placeholder="Ciudad de sucursal" class="form-control" required minlength="5">
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label for="mEditarEstado">* Estado</label>
                        <select name="estado" id="mEditarEstado" class="form-control" required>
                            <option value="">Selecciona un estado</option>                    
                            <option value="Aguascalientes">Aguascalientes</option>                    
                            <option value="Baja California">Baja California</option>                    
                            <option value="Baja California Sur">Baja California Sur</option>                    
                            <option value="Campeche">Campeche</option>                    
                            <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>                    
                            <option value="Colima">Colima</option>                    
                            <option value="Chiapas">Chiapas</option>                    
                            <option value="Chihuahua">Chihuahua</option>                    
                            <option value="Distrito Federal">Distrito Federal</option>                    
                            <option value="Durango">Durango</option>                    
                            <option value="Guanajuato">Guanajuato</option>                    
                            <option value="Guerrero">Guerrero</option>                    
                            <option value="Hidalgo">Hidalgo</option>                    
                            <option value="Jalisco">Jalisco</option>                    
                            <option value="México">México</option>                    
                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>                    
                            <option value="Morelos">Morelos</option>                    
                            <option value="Nayarit">Nayarit</option>                    
                            <option value="Nuevo León">Nuevo León</option>                    
                            <option value="Oaxaca">Oaxaca</option>                    
                            <option value="Puebla">Puebla</option>                    
                            <option value="Querétaro">Querétaro</option>                    
                            <option value="Quintana Roo">Quintana Roo</option>                    
                            <option value="San Luis Potosí">San Luis Potosí</option>                    
                            <option value="Sinaloa">Sinaloa</option>                    
                            <option value="Sonora">Sonora</option>                    
                            <option value="Tabasco">Tabasco</option>                    
                            <option value="Tamaulipas">Tamaulipas</option>                    
                            <option value="Tlaxcala">Tlaxcala</option>                    
                            <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>                    
                            <option value="Yucatán">Yucatán</option>                    
                            <option value="Zacatecas">Zacatecas</option>                    
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="btnModalEditarSucursal" type="button" class="btn btn-primary" data-id-sucursal="">Editar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal deshabilitar inicia -->
<div class="modal fade" id="modalDeshabilitar" tabindex="-1" role="dialog" aria-labelledby="modalDeshabilitarLabel" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeshabilitarLabel">Deshabilitar Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea deshabilitar las siguientes sucursales?</p>
                <ul id="modalDeshabilitarIdSucursal">
                </ul>
            </div>
            <div class="modal-footer">
                <button id="btnModalDeshabilitarSucursal" type="button" class="btn btn-danger">Deshabilitar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>