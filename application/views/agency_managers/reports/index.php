	<div class="bg-title container-fluid">
	</div>
	<section class="container-fluid">
			<div class="col-12">
					<h2 class="section-title">Gestión de Reportes</h2>
					<div class="d-flex edition-buttons justify-content-end">
							<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalAgregar">
									<i class="fa fa-plus-circle"></i>
									Agregar reporte
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
													<th>Id reporte</th>
													<th>Fecha inicio</th>
													<th>Fecha fin</th>
													<th>Ventas</th>
													<th>Solicitudes</th>
													<th>Stock</th>
													<th>Envíos</th>
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
													<td>2018-02-17</td>
													<td>2018-03-14</td>
													<td>10</td>
													<td>3</td>
													<td>20</td>
													<td>4</td>
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
													<td>2018-02-17</td>
													<td>2018-03-14</td>
													<td>10</td>
													<td>3</td>
													<td>20</td>
													<td>4</td>
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
													<td>2018-02-17</td>
													<td>2018-03-14</td>
													<td>10</td>
													<td>3</td>
													<td>20</td>
													<td>4</td>
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
													<td>2018-02-17</td>
													<td>2018-03-14</td>
													<td>10</td>
													<td>3</td>
													<td>20</td>
													<td>4</td>
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
									Eliminar reporte
							</button>
					</div>
			</div>
	</section>
	<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
			<div class="modal-dialog" role="document">
					<div class="modal-content">
							<div class="modal-header">
									<h5 class="modal-title" id="modalAgregarLabel">Agregar reporte</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
									<form>
											<div class="form-group">
													<label for="modalAgregarFechaInicio">Fecha de inicio</label>
													<input type="text" class="form-control" id="modalAgregarFechaInicio" name="fechaInicio">
											</div>
											<div class="form-group">
															<label for="modalAgregarFechaFin">Fecha de fin</label>
															<input type="text" class="form-control" id="modalAgregarFechaFin" name="fechaFin">
													</div>
												<div class="form-group">
															<label for="modalAgregarVentas">Ventas</label>
															<input type="text" class="form-control" id="modalAgregarVentas" name="ventas">
												</div>
												<div class="form-group">
															<label for="modalAgregarSolicitudes">Solicitudes</label>
															<input type="text" class="form-control" id="modalAgregarSolicitudes" name="solicitudes">
												</div>
												<div class="form-group">
															<label for="modalAgregarStocks">Stocks</label>
															<input type="text" class="form-control" id="modalAgregarStocks" name="stocks">
												</div>
												<div class="form-group">
															<label for="modalAgregarEnvios">Envios</label>
															<input type="text" class="form-control" id="modalAgregarEnvios" name="envios">
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
									<h5 class="modal-title" id="modalEditarLabel">Editar reporte</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
									<form>
											<div class="form-group">
													<label for="modalEditarFechaInicio">Fecha de inicio</label>
													<input type="text" class="form-control" id="modalEditarFechaInicio" name="fechaInicio">
											</div>
											<div class="form-group">
															<label for="modalEditarFechaFin">Fecha de fin</label>
															<input type="text" class="form-control" id="modalEditarFechaFin" name="fechaFin">
											</div>
											<div>
															<label for="modalEditarVentas">Ventas</label>
															<input type="text" class="form-control" id="modalEditarVentas" name="ventas">
											</div>
											<div class="form-group">
															<label for="modalEditarSolicitudes">Solicitudes</label>
															<input type="text" class="form-control" id="modalEditarSolicitudes" name="solicitudes">
											</div>
											<div class="form-group">
															<label for="modalEditarStocks">Stocks</label>
															<input type="text" class="form-control" id="modalEditarStocks" name="stocks">
											</div>
											<div class="form-group">
															<label for="modalEditarEnvios">Envios</label>
															<input type="text" class="form-control" id="modalEditarEnvios" name="envios">
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
									<h5 class="modal-title" id="modalEliminarLabel">Eliminar reporte</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
									</button>
							</div>
							<div class="modal-body">
									<p>¿Desea eliminar el reporte <b id="modalEliminarIdReporte">id reporte</b>?</p>
							</div>
							<div class="modal-footer">
									<button type="button" class="btn btn-danger">Eliminar</button>
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							</div>
					</div>
			</div>
	</div>
	<!-- Modal eliminar termina -->
	<!-- Cargar sólo si se utiliza selector de fecha u hora -->
			<script type="text/javascript">
					// Inicializar inputs de fecha para modal Agregar y modal Editar
					$('#modalAgregarFechaInicio, #modalAgregarFechaFin, #modalEditarFechaInicio, #modalEditarFechaFin').daterangepicker({
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
	<!-- Cargar sólo si se utiliza selector de fecha u hora FIN -->
	</body>
</html>
