	<section class="container-fluid">
			<div class="col-12">
					<h2 class="section-title">Gestión de Usuarios</h2>
					<div class="d-flex edition-buttons justify-content-end">
							<button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalAgregar">
									<i class="fa fa-plus-circle"></i>
									Agregar usuario
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
													<th>Id usuario</th>
													<th>Tipo de usuario</th>
													<th>Nombre</th>
													<th>Apellido paterno</th>
													<th>Apellido materno</th>
													<th>Teléfono</th>
													<th>Correo</th>
													<th>Dirección</th>
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
													<td>Vendedor</td>
													<td>Mildred</td>
													<td>Silva</td>
													<td>Méndez</td>
													<td>312 211 6358</td>
													<td>Msilva13@ucol.mx</td>
													<td>Paseo de los abedules #18</td>
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
													<td>Vendedor</td>
													<td>Andrea</td>
													<td>Muñoz</td>
													<td>Liy</td>
													<td>312 211 6358</td>
													<td>Andrea1@ucol.mx</td>
													<td>Paseo de los abedules #18</td>
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
													<td>Vendedor</td>
													<td>Alejandra</td>
													<td>Peralta</td>
													<td>Sanchez</td>
													<td>312 211 6358</td>
													<td>Alejandra@ucol.mx</td>
													<td>Paseo de los abedules #18</td>
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
													<td>Vendedor</td>
													<td>Mario</td>
													<td>Chagollan</td>
													<td>Acevedo</td>
													<td>312 211 6358</td>
													<td>Mario1@ucol.mx</td>
													<td>Paseo de los abedules #18</td>
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
									Eliminar usuario
							</button>
					</div>
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
										<form>
												<div class="form-group">
														<label for="modalAgregarTipoUsuario">Tipo de Usuario</label>
														<input type="text" class="form-control" id="modalAgregarTipoUsuario" name="tipoUsuario">
												</div>
												<div class="form-group">
																<label for="modalAgregarNombre">Nombre</label>
																<input type="text" class="form-control" id="modalAgregarNombre" name="nombre">
														</div>
													<div class="form-group">
																<label for="modalAgregarAPaterno">Apellido Paterno</label>
																<input type="text" class="form-control" id="modalAgregarAPaterno" name="aPaterno">
													</div>
													<div class="form-group">
																<label for="modalAgregarAMaterno">Apellido Materno</label>
																<input type="text" class="form-control" id="modalAgregarAMaterno" name="aMaterno">
													</div>
													<div class="form-group">
																<label for="modalAgregarTelefono">Telefono</label>
																<input type="text" class="form-control" id="modalAgregarTelefono" name="telefono">
													</div>
													<div class="form-group">
																<label for="modalAgregarCorreo">Correo</label>
																<input type="text" class="form-control" id="modalAgregarCorreo" name="correo">
													</div>
													<div class="form-group">
																<label for="modalAgregarDireccion">Dirección</label>
																<input type="text" class="form-control" id="modalAgregarDireccion" name="direccion">
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
										<h5 class="modal-title" id="modalEditarLabel">Editar usuario</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<form>
											<div class="form-group">
													<label for="modalEditarTipoUsuario">Tipo de Usuario</label>
													<input type="text" class="form-control" id="modalEditarTipoUsuario" name="tipoUsuario">
											</div>
											<div class="form-group">
															<label for="modalEditarNombre">Nombre</label>
															<input type="text" class="form-control" id="modalEditarNombre" name="nombre">
													</div>
												<div class="form-group">
															<label for="modalEditarAPaterno">Apellido Paterno</label>
															<input type="text" class="form-control" id="modalEditarAPaterno" name="aPaterno">
												</div>
												<div class="form-group">
															<label for="modalEditarAMaterno">Apellido Materno</label>
															<input type="text" class="form-control" id="modalEditarAMaterno" name="aMaterno">
												</div>
												<div class="form-group">
															<label for="modalEditarTelefono">Telefono</label>
															<input type="text" class="form-control" id="modalEditarTelefono" name="telefono">
												</div>
												<div class="form-group">
															<label for="modalEditarCorreo">Correo</label>
															<input type="text" class="form-control" id="modalEditarCorreo" name="correo">
												</div>
												<div class="form-group">
															<label for="modalEditarDireccion">Dirección</label>
															<input type="text" class="form-control" id="modalEditarDireccion" name="direccion">
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
										<h5 class="modal-title" id="modalEliminarLabel">Eliminar usuario</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
										</button>
								</div>
								<div class="modal-body">
										<p>¿Desea eliminar al usuario <b id="modalEliminarIdReporte">id usuario</b>?</p>
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
				</script>
		<!-- Cargar sólo si se utiliza selector de fecha u hora FIN -->
</body>
</html>
