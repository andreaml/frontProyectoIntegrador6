<div class="bg-title container-fluid">
</div>
<section class="container-fluid">
  <div class="col-12">
    <h2 class="section-title">Gestión de Envíos</h2>
    <div class="d-flex edition-buttons justify-content-end">
      <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#modalAgregar">
        <i class="fa fa-plus-circle"></i>
        Agregar envío
      </button>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>
              <div class="form-check">
              <input class="form-check-input position-static" type="checkbox" id="cbIdEnvio" value="idEnvio" name="envio">
              </div>
            </th>
            <th>Id envío</th>
            <th>Sucursal destino</th>
            <th>Fecha envío</th>
            <th>Fecha recepcion</th>
            <th>Hora recepcion</th>
            <th>Estado</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="cbIdEnvio" value="idEnvio" name="envio">
              </div>
            </td>
            <td>0001</td>
            <td>Manzanillo</td>
            <td>2018-03-14</td>
            <td>2018-04-15</td>
            <td>13:00hrs</td>
            <td>Recibido</td>
            <td>
              <a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="cbIdEnvio" value="idEnvio" name="envio">
              </div>
            </td>
            <td>0002</td>
            <td>Cd. Guzmán</td>
            <td>2018-03-14</td>
            <td>2018-04-16</td>
            <td>13:00hrs</td>
            <td>Recibido</td>
            <td>
              <a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="cbIdEnvio" value="idEnvio" name="envio">
              </div>
            </td>
            <td>0003</td>
            <td>Manzanillo</td>
            <td>2018-03-14</td>
            <td>2018-04-20</td>
            <td>13:00hrs</td>
            <td>Recibido</td>
            <td>
              <a href="" class="text-secondary" data-toggle="modal" data-target="#modalEditar">
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-check">
                <input class="form-check-input position-static" type="checkbox" id="cbIdEnvio" value="idEnvio" name="envio">
              </div>
            </td>
            <td>0004</td>
            <td>Manzanillo</td>
            <td>2018-03-14</td>
            <td>2018-04-15</td>
            <td>13:00hrs</td>
            <td>Recibido</td>
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
  Eliminar envío
  </button>
  </div>
  </div>
</section>
<!-- Modal agregar inicia -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalAgregarLabel">Agregar envío</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label for="modalAgregarSucursal">Sucursal destino</label>
<input type="text" class="form-control" id="modalAgregarSucursal" name="sucursal">
</div>
<div class="form-group">
<label for="modalAgregarFechaEnvio">Fecha de envío</label>
<input type="text" class="form-control" id="modalAgregarFechaEnvio" name="fechaEnvio">
</div>
<div class="form-group">
<label for="modalAgregarFechaRecepcion">Fecha de recepcion</label>
<input type="text" class="form-control" id="modalAgregarFechaRecepcion" name="fechaRecepcion">
</div>
<div class="form-group">
<label for="modalAgregarHoraRecepcion">Hora de recepcion</label>
<input type="text" class="form-control" id="modalAgregarHoraRecepcion" name="horaRecepcion">
</div>
<div class="form-group">
<label for="modalAgregarEstado">Estado</label>
<input type="text" class="form-control" id="modalAgregarEstado" name="agregarEstdo">
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
<h5 class="modal-title" id="modalEditarLabel">Editar envíos</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<label for="modalEditarSucursal">Sucursal destino</label>
<input type="text" class="form-control" id="modalEditarSucursal" name="sucursal">
</div>
<div class="form-group">
<label for="modalEditarFechaEnvio">Fecha de envío</label>
<input type="text" class="form-control" id="modalEditarFechaEnvio" name="fechaEnvio">
</div>
<div class="form-group">
<label for="modalEditarFechaRecepcion">Fecha de recepcion</label>
<input type="text" class="form-control" id="modalEditarFechaRecepcion" name="fechaRecepcion">
</div>
<div class="form-group">
<label for="modalEditarHoraRecepcion">Hora de recepcion</label>
<input type="text" class="form-control" id="modalEditarHoraRecepcion" name="horaRecepcion">
</div>
<div class="form-group">
<label for="modalEditarEstado">Estado</label>
<input type="text" class="form-control" id="modalEditarEstado" name="editarEstdo">
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
<!-- Modal editar inicia -->
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel" data-backdrop="static">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalEliminarLabel">Eliminar envío</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>¿Desea eliminar el envió <b id="modalEliminarIdEnvio"> id envio</b>?</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger">Eliminar</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
</div>
</div>
</div>
</div>
<!-- Modal editar termina -->

<script type="text/javascript">
// Inicializar inputs de fecha para modal Agregar y modal Editar
$('#modalAgregarFechaEnvio, #modalAgregarFechaRecepcion, #modalEditarFechaEnvio, #modalEditarFechaRecepcion').daterangepicker({
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
