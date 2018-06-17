var configuracionColumnasTabla = [
    {
        // Columna para checkbox
        data: '',
        // defaultContent: ''
    },
    {
        // title: 'ID Trabajador',   
        data: 'idTrabajador',
        // defaultContent: ''
    },
    {
        // title: 'Nombre',   
        data: 'nombre',
        // defaultContent: ''
    },
    {
        // title: 'Apellido paterno',   
        data: 'apellidoPaterno',
        // defaultContent: ''
    },
    {
        // title: 'Apellido materno',   
        data: 'apellidoMaterno',
        // defaultContent: ''
    },
    {
        // title: 'Teléfono',   
        data: 'telefono',
        // defaultContent: ''
    },
    {
        // title: 'Correo',   
        data: 'correo',
        // defaultContent: ''
    },
    {
        // title: 'Dirección',   
        data: 'direccion',
        // defaultContent: ''
    },
    {
        // title: 'Sucursal',   
        data: 'sucursal',
        // defaultContent: ''
    },
    {
        // title: 'Rol',   
        data: 'rol',
        // defaultContent: ''
    },
    {
        // Columna para botón editar
        data: '',
        // defaultContent: ''
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
    render: function (data, type, usuario){
            return `<button type="button" class="btnEditar btn btn-primary mr-2 mb-2" data-toggle="modal" data-target="#modalEditar" data-usuario="${encodeURIComponent(JSON.stringify(usuario))}">
                    Editar <i class="fa fa-pencil" aria-hidden="true"></i>
                </button>
                <button type="button" class="btnGenerarPIN btn btn-info mb-2" data-id-usuario="${usuario._id}">
                    Generar PIN <i class="fa fa-key" aria-hidden="true"></i>
                </button>`
    }
}
var SUCURSALES, ROLES

$('document').ready(function() {
    $("[name='idUsuarioCreador']").val(localStorage.idUsuarioActual);
    Sucursales().init()
})

function Sucursales() {
    var sucursalesModel = Model(sessionStorage.urlApi + 'sucursales');
    var sucursalesParaSelect = [];
    function init() {
        sucursalesModel.all().then(sucursales => {
            SUCURSALES = sucursales
            Roles().init();
            sucursalesParaSelect = sucursales.map(function(sucursal) {
                return {texto: sucursal.sucursal, valor: sucursal.idSucursal}
            })
            cargarValoresSelect("modalAgregarSucursal, #modalEditarSucursal", sucursalesParaSelect);        
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: 'No hay usuarios disponibles por el momento.'
            })
        })
    }

    return {
        init: init
    }
}

function Roles() {
    var rolesModel = Model(sessionStorage.urlApi + 'roles');
    var rolesParaSelect = [];
    
    function init() {
        rolesModel.all().then(roles => {
            ROLES = roles
            rolesParaSelect = roles.map(function(rol) {
                return {texto: rol.rol, valor: rol.idRol}
            })
            cargarValoresSelect("modalAgregarRol, #modalEditarRol", rolesParaSelect);
            Usuarios().init();
            Usuarios().agregar();
            Usuarios().eliminar();
        })
    }

    return {
        init: init
    }
}

function Usuarios() {
    var usuariosModel = Model(sessionStorage.urlApi + 'usuarios');
    var USUARIOS;
    function init() {        
        usuariosModel.all().then(usuarios => {
            USUARIOS = usuarios.map(function(usuario, key) {
                usuario.sucursal = SUCURSALES.find(sucursal => {
                    return sucursal.idSucursal == usuario.idSucursal
                }).sucursal;
                usuario.rol = ROLES.find(rol => {
                    return rol.idRol == usuario.idRol
                }).rol;
                usuario._id = usuario.idTrabajador
                return usuario
            });
            cargarTabla();
            Usuarios().editar();
            Usuarios().generarPIN();
    });
    }

    function cargarTabla() {
        if (myDataTable.isLoaded()) {
            myDataTable.actualizarTabla(USUARIOS)
        } else {
            datosTabla = {
                botonEliminarSelector: "#btnEliminarUsuario",
                configuracionColumnasTabla: configuracionColumnasTabla,
                definicionColumnas: [configuracionCheckboxesTabla, configuracionBotonesEditarTabla], 
                filas: USUARIOS,
                indexColumnasFiltro: [8,9],
                mainColumnIndex: 1, 
                mainColumnOrder: "asc",
                tableID: "tablaUsuarios"
            }
            myDataTable.init(datosTabla)
        }
    }

    function generarPIN() {
        $('table tbody').on('click', '.btnGenerarPIN', function() {
            let pin = _generarPIN();
            let idUsuario = $(this).data('id-usuario');
            usuariosModel.update({contrasenia: pin}, idUsuario + "/contrasenia")
            .then(usuario => {
                alertPIN(pin);
            })
            .catch(error => {
                notificacionCentro({
                    type: 'warning',
                    text: mensajeError(error.error.code || 'False', 'Usuario')
                })
            })
        })
    }

    function _generarPIN() {
        let number = function() { return Math.floor((Math.random() * 10) + 1); }
        let pin = number().toString() + number().toString() + number().toString() + number().toString()
        return pin;
    }

    function queueAlertPIN(pin) {
        return swal.insertQueueStep({
            title: 'PIN de usuario: ' + pin,
            text: 'Clave de acceso provisional para el usuario.'
        })
    }

    function alertPIN(pin) {
        return notificacionCentro({
            type: 'info',
            title: 'PIN de usuario: ' + pin,
            text: 'Clave de acceso provisional para el usuario.'
        })
    }

    function agregarUsuario() {
        $("#btnModalAgregar").click(function(){
            let pin = _generarPIN()
            $("#modalAgregarContrasenia").val(pin);
            let formulario = $("#modalAgregar form");
            let formularioValido = formulario.isValid();
            if (formularioValido) {
                let parametros = $("#modalAgregar form").serialize();
                _agregarSucursal(parametros, pin);
            } else {
                let inputsFormulario = formulario.find('.form-control');
                $.each(inputsFormulario, function(llave, input) {
                    validarInput(input);
                });
            }
        });
    }

    function _agregarUsuario(parametros, pin) {
        usuariosModel.add(parametros)
        .then(usuario => {
            limpiarFormulario("modalAgregar form");
            $("#modalAgregar").modal('hide');
            init()
            swal.queue([{
                type: 'success',
                title: 'Usuario agregado satisfactoriamente.',
                confirmButtonText: 'Ok',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    queueAlertPIN(pin);
                }
            }]);
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: mensajeError(error.error.code || 'False', 'Usuario')
            })
        })
    }

    function eliminarUsuarios() {
        $("#btnEliminarUsuario").on('click', function(){
            let listaNombreUsuarios = '';
            $.each(myDataTable.seleccion(), function(llave, usuario) {
                console.log(llave, usuario)
                listaNombreUsuarios += `<li>${usuario.correo}</li>`
            });
            $("#modalEliminarIdUsuario").html('').append(listaNombreUsuarios)
        });
        _eliminarUsuarios();
    }

    function _eliminarUsuarios() {
        $("#btnModalEliminar").click(function(){
            let data = [];
            $.each(myDataTable.seleccion(), function(llave, usuario) {
                data.push(usuario.idTrabajador);
            });
            usuariosModel.bulkDestroy({idArray: data})
            .then(usuario => {
                $("#modalEliminar").modal('hide');
                init();
                notificacionCentro({
                    type: 'success',
                    title: 'Usuario eliminado satisfactoriamente.'
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

    function editarUsuarios() {
        $('table tbody').on('click', '.btnEditar', function () {
            let usuarioCodificado = $(this).data('usuario');
            let _usuario = JSON.parse(decodeURIComponent(usuarioCodificado));
            asociarInformacionAModalEditar(_usuario);
            clickEditarUsuarios();
        });
    }
    
    function clickEditarUsuarios() {
        $("#btnModalEditar").unbind('click').on('click', function() {
            let formulario = $("#modalEditar form");
            let formularioValido = formulario.isValid();
            if (formularioValido) {
                let parametros = formulario.serialize();
                let idUsuario = $(this).attr('data-id-elemento');
                console.log(idUsuario)
                _editarUsuarios(parametros, idUsuario);
            } else {
                let inputsFormulario = formulario.find('.form-control');
                $.each(inputsFormulario, function(llave, input) {
                    validarInput(input);
                });
            }
        });
    }
    
    function _editarUsuarios(parametros, idUsuario) {
        usuariosModel.update(parametros, idUsuario)
        .then(respuesta => {
            $("#modalEditar").modal('hide');
            init();
            notificacionCentro({
                type: 'success',
                title: 'Usuario modificado con éxito.'
            });
        })
        .catch(error => {
            notificacionCentro({
                type: 'error',
                title: 'Error en la conexión. Inténtelo de nuevo por favor.'
            });
        })
    }

    return {
        init: init,
        agregar: agregarUsuario,
        eliminar: eliminarUsuarios,
        editar: editarUsuarios,
        generarPIN: generarPIN
    }
}