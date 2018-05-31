var idSucursalPadre = 1;
var configuracionColumnasTabla = [
    {
        // Columna para checkbox
        data: '',
    },
    {
        // title: 'ID Sucursal',   
        data: 'idSucursal',
    },
    {
        // title: 'Sucursal',   
        data: 'sucursal'
    },
    {
        // title: 'Teléfono',   
        data: 'telefono'
    },
    {
        // title: 'Dirección',   
        data: 'direccion'
    },
    {
        // title: 'Ciudad',   
        data: 'ciudad'
    },
    {
        // title: 'Estado',   
        data: 'estado'
    },
    {
        // title: 'Estatus',   
        data: 'activo'
    },
    {
        // Columna para botón editar
        data: ''
    }
]
var configuracionCheckboxesTabla = {
    targets: [0],
    searchable: false,
    orderable: false,
    className: 'dt-body-center',
    render: function (data, type, sucursal){
        return `<input type="checkbox" name="idSucursal" value="${sucursal.idSucursal}">`;
    }
}
var configuracionBotonesEditarTabla = {
    targets: [-1],
    searchable: false,
    orderable: false,
    className: 'dt-body-center',
    render: function (data, type, sucursal){
            return `<a href="#" class="text-secondary btnEditarSucursal" data-toggle="modal" data-target="#modalEditar" data-sucursal="${encodeURIComponent(JSON.stringify(sucursal))}">
                    Editar <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>`
    }
    
}
var configuracionEstatusFilaTabla = {
    targets: [-2],
    searchable: true,
    orderable: true,
    className: 'dt-body-center',
    render: function (data, type, sucursal){
        return `${(sucursal.activo == '1') ? 'Habilitado' : 'Deshabilitado'}`;
    }
}
var idTabla = "tablaSucursales";
var elementosSeleccionados = {}
var dataTable;

function valoresFormularioSucursal(idModalFormulario) {
    let paramsFormulario = $(`#${idModalFormulario} form`).serialize();
    let paramsManuales = {
        idSucursalPadre: idSucursalPadre,
        tipo: 1
    }
    return `${paramsFormulario}&${$.param(paramsManuales)}`
}

function cargarSucursales() {
    $.get(`${sessionStorage.urlApi}sucursales`)
    .done(function(sucursales) {
        if (sucursales.status) {
            mostrarSucursales(sucursales.data);
        } else {
            notificacionCentro({
                type: 'error',
                title: sucursales.error.message,
                text: 'Inténtelo de nuevo, por favor.'
            })
        }
    })
    .fail(function(){
        notificacionCentro({
            type: 'error',
            title: 'Ocurrió un error en la conexión.',
            text: 'Inténtelo de nuevo, por favor.'
        })
    })
}

function mostrarSucursales(arraySucursales) {
    if (dataTable) {
        actualizarTabla(arraySucursales);
    } else {
        cargarTabla(arraySucursales);
    }
}

function actualizarSeleccionElementosTabla(dataTable){
    let $dataTable         = dataTable.table().node();
    let $chkbox_all        = $('tbody input[type="checkbox"]', $dataTable);
    let $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $dataTable);
    let chkbox_select_all  = $('thead input[name="select_all"]', $dataTable).get(0);
    habilitarElemento('#btnDeshabilitarSucursal', true);
       // Si ningún de los checkboxes está seleccionado
    if($chkbox_checked.length === 0){
       desmarcarCheckboxesTabla(dataTable);
    // Si todos los checkboxes están seleccionados 
    } else if ($chkbox_checked.length === $chkbox_all.length){
       chkbox_select_all.checked = true;
       if('indeterminate' in chkbox_select_all){
          chkbox_select_all.indeterminate = false;
       }
    // Si algunos de los checkboxes están seleccionados
    } else {
       chkbox_select_all.checked = true;
       if('indeterminate' in chkbox_select_all){
          chkbox_select_all.indeterminate = true;
       }
    }    
}

function desmarcarCheckboxesTabla(dataTable) {
    let $dataTable         = dataTable.table().node();
    let chkbox_select_all  = $('thead input[name="select_all"]', $dataTable).get(0);
    chkbox_select_all.checked = false;
    if('indeterminate' in chkbox_select_all){
        chkbox_select_all.indeterminate = false;
    }
    elementosSeleccionados = {};
    habilitarElemento('#btnDeshabilitarSucursal', false);
}

function cargarTabla(arrayDatos) {
    dataTable = $(`#${idTabla}`).DataTable({
        columns: configuracionColumnasTabla,
        columnDefs: [configuracionCheckboxesTabla, configuracionBotonesEditarTabla, configuracionEstatusFilaTabla],
        data: arrayDatos,
        initComplete: function(settings) {
            actualizarSeleccionElementosTabla(settings.oInstance.api())
        },
        language: configuracionLeyendasTabla,
        order: [[7, 'desc']],
        responsive: true,
        rowCallback: function(row, data, dataIndex){
            if (data.activo === '0') {
                $(row).addClass('filaInactiva').find('input[type="checkbox"]').prop('disabled', true);
            }
            var idFila = data.idSucursal;
            // Si idFila se encuentra en elementosSeleccionados
            if(elementosSeleccionados[idFila]){
               $(row).find('input[type="checkbox"]').prop('checked', true);
               $(row).addClass('selected');
            }
        }
    });
    clickEditarSucursal();
    clickCheckboxTabla();
    clickSeleccionarTodo();
    
}

function actualizarTabla(arrayDatos) {
    dataTable.clear();
    dataTable.rows.add(arrayDatos);
    dataTable.draw();
}

function clickCheckboxTabla() {
    $(`#${idTabla} tbody`).on('click', 'input[type="checkbox"]', function(e){
        var $fila = $(this).closest('tr');
        // Obtener datos de fila
        var data = dataTable.row($fila).data();
        // Obtener id de fila
        var idFila = data.idSucursal;
        // Si checkbox está seleccionado y idFila no está en elementosSeleccionados
        if(this.checked && !elementosSeleccionados[idFila]){
            elementosSeleccionados[idFila] = data;
        // Si checkbox no está seleccionado y idFila está en elementosSeleccionados
        } else if (!this.checked && elementosSeleccionados[idFila]){
            delete(elementosSeleccionados[idFila])
        }
        if(this.checked){
           $fila.addClass('selected');
        } else {
           $fila.removeClass('selected');
        }
        actualizarSeleccionElementosTabla(dataTable);
        e.stopPropagation();
     });
}

function clickSeleccionarTodo() {
    $('thead input[name="select_all"]', dataTable.table().container()).on('click', function(e){
        if(this.checked) {
            $(`#${idTabla} tbody input[type="checkbox"]:not(:checked)`).trigger('click');
        } else {
            $(`#${idTabla} tbody input[type="checkbox"]:checked`).trigger('click');
        }
        e.stopPropagation();
    });
}

function clickDeshabilitarSucursales() {
    $("#btnDeshabilitarSucursal").on('click', function(){
        let listaNombreSucursales = '';
        $.each(elementosSeleccionados, function(llave, sucursal) {
            listaNombreSucursales += `<li>${sucursal.sucursal}</li>`
        });
        $("#modalDeshabilitarIdSucursal").html('').append(listaNombreSucursales)
    });
}

function clickModalDeshabilitarSucursales() {
    $("#btnModalDeshabilitarSucursal").on('click', function(){
        $(this).closest('.modal').modal('hide');
        let listaIdSucursales = [];
        $.each(elementosSeleccionados, function(llave, sucursal) {
            listaIdSucursales.push(sucursal.idSucursal);
        });
       deshabilitarSucursales(listaIdSucursales)
    });
}

function deshabilitarSucursales(listaIdSucursales) {
    $.ajax({
        crossDomain: true,
        data: {
            idArray: listaIdSucursales
        },
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'accept': 'application/json'
        },
        method: 'DELETE',
        url: `${sessionStorage.urlApi}sucursales/eliminar/`,
    })
    .done(function(respuesta) {
        if (respuesta.status) {
            cargarSucursales();
            desmarcarCheckboxesTabla(dataTable);
            notificacionEsquina({
                type: 'success',
                title: 'Sucursales deshabilitadas satisfactoriamente.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: 'Error en la conexión, inténtelo de nuevo por favor.'
            });
        }
    })
    .fail(function(error) {
        notificacionEsquina({
            type: 'error',
            title: 'Error en la conexión, inténtelo de nuevo por favor.'
        });
    })
}

function clickModalAgregarSucursal() {
    $("#btnModalAgregarSucursal").on('click', function() {
        let formulario = $("#modalAgregar form");
        let formularioValido = formulario.isValid();
        if (formularioValido) {
            let parametros = valoresFormularioSucursal('modalAgregar');
            agregarSucursal(parametros);
        } else {
            let inputsFormulario = formulario.find('.form-control');
            $.each(inputsFormulario, function(llave, input) {
                validarInput(input);
            });
        }
    });
}

function agregarSucursal(parametros) {
    $.post(`${sessionStorage.urlApi}sucursales/nuevo`, parametros)
    .done(function(respuesta) {
        if (respuesta.status) {
            $("#modalAgregar").modal('hide');
            cargarSucursales();
            notificacionEsquina({
                type: 'success',
                title: 'Sucursal añadida con éxito.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: mensajeError(respuesta.error.code, 'Sucursal')
            });
        }
    })
    .fail(function(error) {
        notificacionEsquina({
            type: 'error',
            title: 'Error en la conexión. Inténtelo de nuevo por favor.'
        });
    })
}

function clickEditarSucursal() {
    $(`#${idTabla} tbody`).on( 'click', 'a', function () {
        let sucursalCodificada = $(this).data('sucursal');
        let sucursal = JSON.parse(decodeURIComponent(sucursalCodificada));
        asociarInformacionAModalEditar(sucursal);
    });
}

function asociarInformacionAModalEditar(sucursal) {
    $("#mEditarNombre").val(sucursal.sucursal);
    $("#mEditarTelefono").val(sucursal.telefono);
    $("#mEditarDireccion").val(sucursal.direccion);
    $("#mEditarCiudad").val(sucursal.ciudad);
    $("#mEditarEstado").val(sucursal.estado).change();
    $("#btnModalEditarSucursal").attr('data-id-sucursal', sucursal.idSucursal)
}

function clickModalEditarSucursal() {
    $("#btnModalEditarSucursal").on('click', function() {
        let formulario = $("#modalEditar form");
        let formularioValido = formulario.isValid();
        if (formularioValido) {
            let parametros = valoresFormularioSucursal("modalEditar");
            let idSucursal = $(this).attr('data-id-sucursal');
            editarSucursal(parametros, idSucursal);
        } else {
            let inputsFormulario = formulario.find('.form-control');
            $.each(inputsFormulario, function(llave, input) {
                validarInput(input);
            });
        }
    });
}

function editarSucursal(parametros, idSucursal) {
    $.ajax({
        crossDomain: true,
        data: parametros,
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'accept': 'application/json'
        },
        method: 'PUT',
        url: `${sessionStorage.urlApi}sucursales/editar/${idSucursal}`, 
    })
    .done(function(respuesta) {
        if (respuesta.status) {
            $("#modalEditar").modal('hide');
            cargarSucursales();
            notificacionEsquina({
                type: 'success',
                title: 'Sucursal modificada con éxito.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: mensajeError(respuesta.error.code, 'Sucursal')
            });
        }
    })
    .fail(function(error) {
        notificacionEsquina({
            type: 'error',
            title: 'Error en la conexión. Inténtelo de nuevo por favor.'
        });
    })
}



cargarSucursales();
clickDeshabilitarSucursales();
clickModalDeshabilitarSucursales();
clickModalAgregarSucursal();
clickModalEditarSucursal();