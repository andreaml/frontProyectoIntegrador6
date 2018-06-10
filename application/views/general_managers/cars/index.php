<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volkswagen Gerente Global</title>
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
                        <a class="nav-link" href="gg_sucursales.html">Sucursales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gg_usuarios.html">Usuarios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gg_vehiculos.html">Vehículos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gg_stocks.html">Stocks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gg_reportes.html">Reportes</a>
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
                            <a class="dropdown-item" href="#">Perfil: <span>Gerente global</span></a>
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
            <h2 class="section-title">Gestión de Vehículos</h2>
            <div class="d-flex edition-buttons justify-content-end">
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalAgregar">
                    <i class="fa fa-plus-circle"></i>
                    Agregar Vehículo
                </button>

            </div>
	
        <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input position-static" type="checkbox" id="cbIdReporte" value="idReporte" name="reporte">
                                </div>
                            </th>
                            <th>Id vehículo</th>
                            <th>Modelo</th>
                            <th>Año</th>
                            <th>Color</th>
                            <th>Versión</th>
                            <th>Tipo transmisión</th>
                            <th>A/A</th>
                            <th>Bolsas aire</th>
                            <th>Tipo freno</th>
                            <th>Cilindrada</th>
                            <th>Equipamiento</th>
                            <th>Disponibilidad</th>
                            <th>Precio</th>
                            <th>Puertas</th>
                            <th>Combustible</th>
                            <th>Potencia</th>
                            <th>Categoría</th>
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
                    <td>Golf</td>
                    <td>2018</td>
                    <td>Gris</td>
                    <td>XL</td>
                    <td>Hidráulica</td>
                    <td>Sí</td>
                    <td>3</td>
                    <td>Disco</td>
                    <td>4</td>
                    <td>GPS, Pantalla, USB</td>
                    <td>30 pzs</td>
                    <td>$209,000</td>
                    <td>4</td>
                    <td>Magna</td>
                    <td>105/5250</td>
                    <td>Auto compacto</td>
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
                    <td>Golf</td>
                    <td>2018</td>
                    <td>Gris</td>
                    <td>XL</td>
                    <td>Hidráulica</td>
                    <td>Sí</td>
                    <td>3</td>
                    <td>Disco</td>
                    <td>4</td>
                    <td>GPS, Pantalla, USB</td>
                    <td>30 pzs</td>
                    <td>$209,000</td>
                    <td>4</td>
                    <td>Magna</td>
                    <td>105/5250</td>
                    <td>Auto compacto</td>
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
                    <td>Golf</td>
                    <td>2018</td>
                    <td>Gris</td>
                    <td>XL</td>
                    <td>Hidráulica</td>
                    <td>Sí</td>
                    <td>3</td>
                    <td>Disco</td>
                    <td>4</td>
                    <td>GPS, Pantalla, USB</td>
                    <td>30 pzs</td>
                    <td>$209,000</td>
                    <td>4</td>
                    <td>Magna</td>
                    <td>105/5250</td>
                    <td>Auto compacto</td>
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
                    <td>Golf</td>
                    <td>2018</td>
                    <td>Gris</td>
                    <td>XL</td>
                    <td>Hidráulica</td>
                    <td>Sí</td>
                    <td>3</td>
                    <td>Disco</td>
                    <td>4</td>
                    <td>GPS, Pantalla, USB</td>
                    <td>30 pzs</td>
                    <td>$209,000</td>
                    <td>4</td>
                    <td>Magna</td>
                    <td>105/5250</td>
                    <td>Auto compacto</td>
                    <td>
                        <a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
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
                    Eliminar Vehículo
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
</body>
    <script src="js/general/jquery-3.3.1.min.js"></script>
    <script src="js/general/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
</html>