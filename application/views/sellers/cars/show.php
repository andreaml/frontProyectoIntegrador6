<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
	<div class="col-12">
		<h2 class="section-title">Catálogo de vehículos - 
			<span class="nombreCategoria">
                <?= $category ?>
            </span>
		</h2>
	</div>
	<div class="row">
		<div class="col-12 col-lg-6 mb-3 div-modelo">
			<div class="card border-secondary">
				<div class="card-header bg-secondary text-white">
					<h5 class="m-0">Modelos disponibles</h5>
				</div>
				<div class="card-body">
					<div class="row mx-0">
						<div class="col-12">
							<div id="filtrosTabla" class="form-inline d-flex justify-content-center px-3 mb-3 ">
								<label class="my-1 mr-4">FILTROS</label>
							</div>
						</div>
						<table id="tablaModelos" class="table table-striped display select compact" style="width:100%">
							<thead class="thead-dark">
								<tr>
									<th>Modelo</th>
									<th>Año</th>
									<th>Versión</th>
									<th>Opciones</th>
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
								<br> Comparar este vehículo
							</button>
							<h5>Transacciones</h5>
							<button id="btnVerificarExistencia" class="btn btn-primary btn-block my-3" type="button" data-toggle="modal" data-target="#modalExistencia">
								<i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
								<br> Verificar existencia
							</button>
							<button class="btn btn-success btn-block my-3" type="button" data-toggle="collapse" data-target="#caracteristicasModelo">
								<i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i>
								<br> Iniciar proceso de venta
							</button>
							<h5>Colores disponibles</h5>
							<div id="coloresDisponibles">
								<ul></ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal imagenes termina -->
<script>
	var idCategoria = "<?= $idCategory ?>";
</script>