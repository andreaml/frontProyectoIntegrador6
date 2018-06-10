<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volkswagen Vendedor</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand pl-3" href="#"><img src="img/logoMenu.png" alt="Volkswagen" class="nav-logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pr-3" id="navbar">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link" href="v_clientes.html">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="v_catalogo.html">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="v_ventas.html">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="v_seguimientos.html">Seguimientos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="v_solicitudes.html">Solicitudes</a>
                    </li>
                    <li class="nav-item dropdown ml-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Notificación 1</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Notificación 2</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown btn-secondary ml-lg-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Usuario
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Perfil: <span>Vendedor</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Opción 1</a>
                            <a class="dropdown-item" href="#">Opción 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="bg-title container-fluid">
    </div>

	<section class="container-fluid">
        <div class="col-12">
            <h2 class="section-title">Gestión de solicitudes</h2>

            <div class="d-flex edition-buttons justify-content-end">
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#mAgregarSolicitud">
                    <i class="fa fa-plus-circle"></i>
                    Agregar solicitud
                </button>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="cbIdSolicitud" value="idSolicitud" name="solicitud">
                                </div>
                            </th>
                            <th>Id solicitud</th>
                            <th>Sucursal solicitada</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Vehiculo</th>
                            <th>Cantidad</th>
                            <th>Stock origen</th>
                            <th>Stock destino</th>
                            <th>Documento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="cbIdSolicitud" value="idSolicitud" name="solicitud">
                                </div>
                            </th>
                            <td>0001</td>
                            <td>Rancagua</td>
                            <td>2018-02-15</td>
                            <td>15:35 hrs</td>
                            <td>Golf</td>
                            <td>2</td>
                            <td>01 Rancagua</td>
                            <td>01 Coliman</td>
                            <td><a href="#" class="btn-file"><i class="fa fa-file"></i></a></td>
                            <td>
                                <a href="" class="text-secondary" data-toggle="modal" data-target="#mEditarSolicitud">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="cbIdSolicitud" value="idSolicitud" name="solicitud">
                                </div>
                            </th>
                            <td>0001</td>
                            <td>Rancagua</td>
                            <td>2018-02-15</td>
                            <td>15:35 hrs</td>
                            <td>Golf</td>
                            <td>2</td>
                            <td>01 Rancagua</td>
                            <td>01 Coliman</td>
                            <td><a href="#" class="btn-file"><i class="fa fa-file"></i></a></td>
                            <td>
                                <a href="" class="text-secondary" data-toggle="modal" data-target="#mEditarSolicitud">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="cbIdSolicitud" value="idSolicitud" name="solicitud">
                                </div>
                            </th>
                            <td>0001</td>
                            <td>Rancagua</td>
                            <td>2018-02-15</td>
                            <td>15:35 hrs</td>
                            <td>Golf</td>
                            <td>2</td>
                            <td>01 Rancagua</td>
                            <td>01 Coliman</td>
                            <td><a href="#" class="btn-file"><i class="fa fa-file"></i></a></td>
                            <td>
                                <a href="" class="text-secondary" data-toggle="modal" data-target="#mEditarSolicitud">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="cbIdSolicitud" value="idSolicitud" name="solicitud">
                                </div>
                            </th>
                            <td>0001</td>
                            <td>Rancagua</td>
                            <td>2018-02-15</td>
                            <td>15:35 hrs</td>
                            <td>Golf</td>
                            <td>2</td>
                            <td>01 Rancagua</td>
                            <td>01 Coliman</td>
                            <td><a href="#" class="btn-file"><i class="fa fa-file"></i></a></td>
                            <td>
                                <a href="" class="text-secondary" data-toggle="modal" data-target="#mEditarSolicitud">
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
                    Eliminar solicitud
                </button>
            </div>
        </div>
	</section>	
    <!-- Modal agregar inicia -->
    <div id="mAgregarSolicitud" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAgregarLabel">Agregar solicitud</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <select name="sucursalSolicitada" id="sucursalSolicitada" class="form-control">
                            <option value="0">Sucursal solicitada</option>
                            <option value="1">Rancagua</option>
                            <option value="2">Coliman</option>
                        </select>
                        <label for="fechaHoraSolicitud">Fecha y hora de solicitud</label>
                        <input type="datetime-local" name="fechaHoraFin" id="fechaHoraFin" class="form-control">
                        <select name="cliente" id="cliente" class="form-control">
                            <option value="0">Vehiculo</option>
                            <option value="1">Golf</option>
                            <option value="2">Polo</option>
                        </select>
                        <label for="cantidadVehiculos">Cantidad de vehículos</label>
                        <input type="number" name="cantidadVehiculos" id="cantidadVehiculos" class="form-control">
                        <select name="stockOrigen" id="stockOrigen" class="form-control">
                            <option value="0">Stock origen</option>
                            <option value="1">01 Rancagua</option>
                            <option value="2">02 Rancagua</option>
                        </select>
                        <select name="stockDestino" id="stockDestino" class="form-control">
                            <option value="0">Stock destino</option>
                            <option value="1">01 Coliman</option>
                            <option value="2">02 Coliman</option>
                        </select>
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
    <div id="mEditarSolicitud" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditarLabel">Editar solicitud</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <select name="sucursalSolicitada" id="sucursalSolicitada" class="form-control">
                            <option value="0">Sucursal solicitada</option>
                            <option value="1">Rancagua</option>
                            <option value="2">Coliman</option>
                        </select>
                        <label for="fechaHoraSolicitud">Fecha y hora de solicitud</label>
                        <input type="datetime-local" name="fechaHoraFin" id="fechaHoraFin" class="form-control">
                        <select name="cliente" id="cliente" class="form-control">
                            <option value="0">Vehiculo</option>
                            <option value="1">Golf</option>
                            <option value="2">Polo</option>
                        </select>
                        <label for="cantidadVehiculos">Cantidad de vehículos</label>
                        <input type="number" name="cantidadVehiculos" id="cantidadVehiculos" class="form-control">
                        <select name="stockOrigen" id="stockOrigen" class="form-control">
                            <option value="0">Stock origen</option>
                            <option value="1">01 Rancagua</option>
                            <option value="2">02 Rancagua</option>
                        </select>
                        <select name="stockDestino" id="stockDestino" class="form-control">
                            <option value="0">Stock destino</option>
                            <option value="1">01 Coliman</option>
                            <option value="2">02 Coliman</option>
                        </select>
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
                    <h5 class="modal-title" id="modalEliminarLabel">Eliminar solicitud</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar el solicitud <b id="modalEliminarIdVehiculo">id solicitud</b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal eliminar termina -->

    <script src="js/general/jquery-3.3.1.min.js"></script>
    <script src="js/general/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Cargar sólo si se utiliza selector de fecha u hora -->
    <script src="js/moment/moment.js"></script>
    <script src="js/moment/es.js"></script>
    <script src="js/datetimepicker/daterangepicker.js"></script>
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