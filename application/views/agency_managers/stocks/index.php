	<div class="bg-title container-fluid">
	</div>
	<section class="container-fluid">
			<div class="col-12">
					<h2 class="section-title">Gestión de Stocks</h2>
					<div class="d-flex edition-buttons justify-content-end">
							<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalAgregar">
									<i class="fa fa-plus-circle"></i>
									Agregar stocks
							</button>
					</div>
					<div class="table-responsive">
							<table class="table">
									<thead class="thead-dark">
											<tr>
													<th>
															<div class="form-check">
																	<input class="form-check-input position-static" type="checkbox" id="cbIdReporte" value="idReporte" name="reporte">
															</div>
													</th>
													<th>Id Stocks</th>
													<th>Sucursal destino</th>
													<th>Fecha inicio</th>
													<th>Hora envio</th>
													<th>Fecha recepcion</th>
													<th>Estado</th>
													<th>Cantidad vehiculos inicial</th>
													<th>Cantidad vehiculos restantes</th>
													<th></th>
											</tr>
									</thead>
									<tbody>
											<tr>
													<td>
															<div class="form-check">
																	<input class="form-check-input position-static" type="checkbox" id="cbIdReporte" value="idReporte" name="reporte">
															</div>
													</td>
													<td>0001</td>
													<td>Rancagua</td>
													<td>2018-02-17</td>
													<td>13:00hrs</td>
													<td>2018-03-14</td>
													<td>Entregado</td>
													<td>30</td>
													<td>20</td>
													<td>
															<a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
																	<i class="fa fa-pencil" aria-hidden="true"></i>
															</a>
													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<input class="form-check-input position-static" type="checkbox" id="cbIdReporte" value="idReporte" name="reporte">
															</div>
														</td>
														<td>0002</td>
														<td>Rancagua</td>
														<td>2018-02-17</td>
														<td>13:00hrs</td>
														<td>2018-03-14</td>
														<td>Entregado</td>
														<td>30</td>
														<td>20</td>
														<td>
															<a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
																	<i class="fa fa-pencil" aria-hidden="true"></i>
															</a>
													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<input class="form-check-input position-static" type="checkbox" id="cbIdReporte" value="idReporte" name="reporte">
															</div>
														</td>
														<td>0003</td>
														<td>Coliman</td>
														<td>2018-02-17</td>
														<td>13:00hrs</td>
														<td>2018-03-14</td>
														<td>Entregado</td>
														<td>30</td>
														<td>20</td>
														<td>
															<a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
																	<i class="fa fa-pencil" aria-hidden="true"></i>
															</a>
													</td>
											</tr>
											<tr>
													<td>
															<div class="form-check">
																	<input class="form-check-input position-static" type="checkbox" id="cbIdReporte" value="idReporte" name="reporte">
															</div>
														</td>
														<td>0004</td>
														<td>Rancagua</td>
														<td>2018-02-17</td>
														<td>13:00hrs</td>
														<td>2018-03-14</td>
														<td>Entregado</td>
														<td>30</td>
														<td>20</td>
														<td>
															<a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
																	<i class="fa fa-pencil" aria-hidden="true"></i>
															</a>
													</td>
											</tr>
									</tbody>
							</table>
					</div>
					<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
									<li class="page-item"><a class="page-link border border-secondary" href="#">Anterior</a></li>
									<li class="page-item"><a class="page-link border border-secondary" href="#">1</a></li>
									<li class="page-item"><a class="page-link border border-secondary" href="#">2</a></li>
									<li class="page-item"><a class="page-link border border-secondary" href="#">3</a></li>
									<li class="page-item"><a class="page-link border border-secondary" href="#">Siguiente</a></li>
							</ul>
					</nav>
					<div class="d-flex edition-buttons justify-content-end">
							<button class="btn btn-danger" type="button" data-toggle="modal" data-target="#modalEliminar">
									<i class="fa fa-trash"></i>
									Eliminar stock
							</button>
					</div>
			</div>
	</section>
    <!-- Modal agregar inicia -->
		<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
				<div class="modal-dialog" role="document">
						<div class="modal-content">
								<div class="modal-header">
										<h5 class="modal-title" id="modalAgregarLabel">Agregar stock</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<form>
												<div class="form-group">
														<label for="modalAgregarFechaInicio">Sucursal destino</label>
														<select name="area" id="area" class="form-control">
															<option value="0">Seleccionar sucursal</option>
															<option value="1">Rancagua</option>
															<option value="2">Coliman</option>
														</select>
												</div>
												<div class="form-group">
																<label for="modalAgregarFechaEnvio">Fecha de envío</label>
																<input type="text" class="form-control" id="modalAgregarFechaEnvio" name="fechaEnvio">
														</div>
													<div class="form-group">
																<label for="modalAgregarHora">Hora envío</label>
																<input type="text" class="form-control" id="modalAgregarHora" name="hora">
													</div>
													<div class="form-group">
																<label for="modalAgregarFechaRecepcion">Fecha de recepcion</label>
																<input type="text" class="form-control" id="modalAgregarFechaRecepcion" name="fechaRecepcion">
													</div>
													<div class="form-group">
																<label for="modalAgregarEstado">Estado</label>
																<input type="text" class="form-control" id="modalAgregarEstado" name="estado">
													</div>
													<div class="form-group">
																<label for="modalAgregarCantidadVehiculosInicial">Cantidad de vehículos inicial</label>
																<input type="text" class="form-control" id="modalAgregarCantidadVehiculosInicial" name="vehiculosInicial">
													</div>
													<div class="form-group">
																<label for="modalAgregarCantidadVehiculosRestantes">Cantidad de vehículos restantes</label>
																<input type="text" class="form-control" id="modalAgregarCantidadVehiculosRestantes" name="vehiculosRestantes">
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
    <div id="mEditarStock" class="modal">
        <div class="modal-all">

            <div class="modal-header center">
                <span class="close">&times;</span>
                <h2>Editar stock</h2>
            </div>
            <div class="modal-content">
                <form action="POST" class="col-7 center">
                    <label for="area">Sucursal destino</label>
                    <select name="area" id="area" class="form-control">
                        <option value="0">Sucursal destino</option>
                        <option value="1">Rancagua</option>
                        <option value="2">Coliman</option>
                    </select>
                    <label for="fechaHoraEnvio">Fecha y hora de envío</label>
                    <input type="datetime-local" name="fechaHoraEnvio" id="fechaHoraEnvio" class="form-control">
                    <label for="estadoStock">Estado del stock</label>
                    <select name="estadoStock" id="estadoStock" class="form-control">
                        <option value="0">Estado</option>
                        <option value="1">Pendiente</option>
                        <option value="1">Enviado</option>
                        <option value="2">Recibido</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer center">
                <div class="row">
                    <div class="col-3 mr-10">
                        <button class="form-control bg-primary">Editar</button>
                    </div>
                    <div class="col-3">
                        <button class="form-control bg-danger" id="cancelarEditar">Cancelar</button>
                    </div>
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
										<h5 class="modal-title" id="modalEliminarLabel">Eliminar stock</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<p>¿Desea eliminar el stock <b id="modalEliminarIdReporte">id stock</b>?</p>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-danger">Eliminar</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								</div>
						</div>
				</div>
		</div>
		<!-- Modal eliminar termina -->
				<script type="text/javascript">
						// Inicializar inputs de fecha para modal Agregar y modal Editar
						$('#modalAgregarFechaRecepcion, #modalAgregarFechaEnvio, #modalEditarFechaEnvio, #modalEditarFechaRecepcion').daterangepicker({
								"singleDatePicker": true,
								"timePicker": false,
								"parentEl": "div.modal",
								"autoApply": true,
								"startDate": new Date(),
								"endDate": new Date()
						}, function(start, end, label) {
								console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
						});
				</script>
</body>
</html>
