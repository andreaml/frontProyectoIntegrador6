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
        data: 'estatus'
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
            return `<button type="button" class="btnEditar btn btn-primary mr-2 mb-2" data-toggle="modal" data-target="#modalEditar" data-sucursal="${encodeURIComponent(JSON.stringify(sucursal))}">
                    Editar <i class="fa fa-pencil" aria-hidden="true"></i>
                </button>`
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

function Sucursales() {
    var sucursalesModel = Model(sessionStorage.urlApi + 'sucursales');
    var SUCURSALES;

    function init() {
        sucursalesModel.all().then(sucursales => {
            SUCURSALES = sucursales.map(function(sucursal, key) {
                sucursal.estatus = (sucursal.activo == "1") ? "Habilitado" : "Deshabilitado"
                sucursal._id = sucursal.idSucursal
                return sucursal
            });
            console.log(SUCURSALES)
            cargarTabla();
            Sucursales().editar();
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: 'No hay sucursales disponibles por el momento.'
            })
        })
    }

    function cargarTabla() {
        if (myDataTable.isLoaded()) {
            myDataTable.actualizarTabla(SUCURSALES)
        } else {
            datosTabla = {
                botonEliminarSelector: "#btnDeshabilitarSucursal",
                configuracionColumnasTabla: configuracionColumnasTabla,
                definicionColumnas: [configuracionCheckboxesTabla, configuracionBotonesEditarTabla, configuracionEstatusFilaTabla], 
                filas: SUCURSALES,
                indexColumnasFiltro: [5,6,7],
                mainColumnIndex: 7, 
                mainColumnOrder: "desc",
                tableID: "tablaSucursales"
            }
            myDataTable.init(datosTabla)
        }
        Sucursales().editar();
    }

    function valoresFormularioSucursal(idModalFormulario) {
        let paramsFormulario = $(`#${idModalFormulario} form`).serialize();
        let paramsManuales = {
            idSucursalPadre: idSucursalPadre,
            tipo: 1
        }
        return `${paramsFormulario}&${$.param(paramsManuales)}`
    }

    function agregarSucursal() {
        $("#btnModalAgregar").click(function(){
            let formulario = $("#modalAgregar form");
            let formularioValido = formulario.isValid();
            if (formularioValido) {
                let parametros = valoresFormularioSucursal('modalAgregar');
                _agregarSucursal(parametros);
            } else {
                let inputsFormulario = formulario.find('.form-control');
                $.each(inputsFormulario, function(llave, input) {
                    validarInput(input);
                });
            }
        });
    }

    function _agregarSucursal(parametros) {
        sucursalesModel.add(parametros)
        .then(usuario => {
            limpiarFormulario("modalAgregar form");
            $("#modalAgregar").modal('hide');
            init()
            notificacionCentro({
                type: 'success',
                title: 'Sucursal añadida con éxito.'
            });
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: mensajeError(error.error.code || 'False', 'Sucursal')
            })
        })
    }

    function deshabilitarSucursales() {
        $("#btnDeshabilitarSucursal").on('click', function(){
            let listaNombreSucursales = '';
            $.each(myDataTable.seleccion(), function(llave, sucursal) {
                listaNombreSucursales += `<li>${sucursal.sucursal}</li>`
            });
            $("#modalDeshabilitarIdSucursal").html('').append(listaNombreSucursales)
        });
        _deshabilitarSucursales();
    }

    function _deshabilitarSucursales() {
        $("#btnModalDeshabilitar").click(function(){
            let data = [];
            $.each(myDataTable.seleccion(), function(llave, sucursal) {
                data.push(sucursal._id);
            });
            sucursalesModel.bulkDestroy({idArray: data})
            .then(sucursal => {
                $("#modalDeshabilitar").modal('hide');
                init();
                notificacionCentro({
                    type: 'success',
                    title: 'Sucursales deshabilitadas satisfactoriamente.'
                })
                myDataTable.desmarcarSeleccion();
            })
            .catch(error => {
                notificacionCentro({
                    type: 'warning',
                    text: mensajeError('False', '')
                })
            })
        });
    }

    function editarSucursales() {
        $('table tbody').on('click', '.btnEditar', function () {
            let sucursalCodificada = $(this).data('sucursal');
            let _sucursal = JSON.parse(decodeURIComponent(sucursalCodificada));
            asociarInformacionAModalEditar(_sucursal);
            clickEditarSucursales();
        });
    }

    function clickEditarSucursales() {
        $("#btnModalEditar").unbind('click').on('click', function() {
            let formulario = $("#modalEditar form");
            let formularioValido = formulario.isValid();
            if (formularioValido) {
                let parametros = valoresFormularioSucursal('modalEditar');
                let idSucursal = $(this).attr('data-id-elemento');
                _editarSucursales(parametros, idSucursal);
            } else {
                let inputsFormulario = formulario.find('.form-control');
                $.each(inputsFormulario, function(llave, input) {
                    validarInput(input);
                });
            }
        });
    }
    
    function _editarSucursales(parametros, idSucursal) {
        sucursalesModel.update(parametros, idSucursal)
        .then(respuesta => {
            $("#modalEditar").modal('hide');
            init();
            notificacionCentro({
                type: 'success',
                title: 'Sucursal modificada con éxito.'
            });
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                title: 'Error en la conexión. Inténtelo de nuevo por favor.'
            });
        })
    }

    return {
        init: init,
        agregar: agregarSucursal,
        deshabilitar: deshabilitarSucursales,
        editar: editarSucursales
    }
}

$('document').ready(function() {
    $("[name='idUsuarioCreador']").val(localStorage.idUsuarioActual);
    Sucursales().init();
    Sucursales().agregar();
    Sucursales().deshabilitar();
})