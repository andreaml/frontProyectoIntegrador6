var configuracionColumnasTabla = [
    {
        data: 'modelo',
        defaultContent: ''
    },
    {
        data: 'anio',
        defaultContent: ''
    },
    {
        data: 'version',
        defaultContent: ''
    },
    {
        data: '',
        defaultContent: ''
    }
]
var configuracionBotonesEditarTabla = {
    targets: [-1],
    searchable: false,
    orderable: false,
    className: 'dt-body-center',
    render: function (data, type, modelo){
            return `<button class="btn btn-primary btnVerModelo" type="button" data-id-modelo="${modelo.idModeloVehiculo}">
                Ver modelo
            </button>`
    }
}
var COLORES
var imagenes = {};
var idTabla = "tablaModelos"

$('document').ready(function () {
    cargarColores(function (colores) {
        if (colores) {
            COLORES = colores;
        }
    })
    obtenerSucursales();
    Modelos().init()
    clickBtnVerificarExistencia()
})

function Modelos() {
    var modelosModel = Model(sessionStorage.urlApi + 'modelos');
    var MODELOS
    var indexImagenes
    function init() {
        modelosModel.find('porCategoria/' + idCategoria)
        .then(modelos => {
            MODELOS = modelos
            // USUARIOS = usuarios.map(function (usuario, key) {
            //     usuario.sucursal = SUCURSALES.find(sucursal => {
            //         return sucursal.idSucursal == usuario.idSucursal
            //     }).sucursal;
            //     usuario.rol = ROLES.find(rol => {
            //         return rol.idRol == usuario.idRol
            //     }).rol;
            //     usuario._id = usuario.idTrabajador
            //     return usuario
            // });
            cargarTabla();
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: 'No hay modelos disponibles por el momento.'
            })
        })
    }

    function cargarTabla() {
        if (myDataTable.isLoaded()) {
            myDataTable.actualizarTabla(MODELOS)
        } else {
            datosTabla = {
                botonEliminarSelector: "",
                configuracionColumnasTabla: configuracionColumnasTabla,
                definicionColumnas: [configuracionBotonesEditarTabla], 
                filas: MODELOS,
                indexColumnasFiltro: [0,1,2],
                mainColumnIndex: 1, 
                mainColumnOrder: "asc",
                tableID: "tablaModelos"
            }
            myDataTable.init(datosTabla);
        }
        clickVerModelo();
    }
    
    function clickVerModelo() {
        $(`#${idTabla} tbody`).on('click', '.btnVerModelo', function () {
            $(this).closest(".div-modelo").siblings("#caracteristicasModelo").fadeIn();
            let idModelo = $(this).attr("data-id-modelo");
            $("#btnVincularColorModelo, #btnVerificarExistencia").attr("data-id-modelo", idModelo)
            cargarCaracteristicasModelo(idModelo);
            cargarColoresModelo(idModelo);
        })
    }
    
    function cargarCaracteristicasModelo(idModelo) {
        let modeloSeleccionado = MODELOS.filter(function(modelo) {
            if (modelo.idModeloVehiculo == idModelo) {
                return modelo 
            }
        });
        modeloSeleccionado = modeloSeleccionado[0];
        $(".nombre-modelo").text(modeloSeleccionado.modelo)
        $.each(modeloSeleccionado, function(key, caracteristica) {
            $(`table .${key}`).text(caracteristica)
        })
        $("#btnEditar").attr("data-id-modelo", idModelo)
        idModeloActual = null
    }
    
    function cargarColoresModelo(idModelo) {
        $.get(`${sessionStorage.urlApi}colores/porModelo/${idModelo}`)
        .done(function(respuesta) {
            if (respuesta.status) {
                mostrarColoresPorModelo(idModelo, respuesta.data)
            } else {
                $("#modalGestionarColoresModelo table tbody").html('Sin colores vinculados')
                $("#coloresDisponibles ul").html('Sin colores disponibles')
            }
        })
        .fail(function() {
            $("#coloresDisponibles ul").html('Sin colores disponibles')
        })
    }
    
    function mostrarColoresPorModelo(idModelo, coloresModelo) {
        let iconoCargando = "<li class='text-center'><span class='fa fa-spinner fa-spin fa-3x fa-fw'></span>"
        $("#coloresDisponibles ul").html(iconoCargando)
        $("#modalGestionarColoresModelo table tbody").html('')
        coloresModelo.map(function(colorModelo) {
            mostrarNombresColoresModelo(colorModelo);
        })
        $(`#selectColores`).trigger('change');    
    }
    
    function mostrarNombresColoresModelo(colorModelo) {
        COLORES.map(function(color) {
            if (colorModelo.idColor === color.idColor) { 
                cargarUrlImagenesColorModelo(colorModelo.idModeloVehiculo, colorModelo.idColor, (arrayImagenes) => {
                    let indexImagenes = `${colorModelo.idModeloVehiculo}${colorModelo.idColor}`
                    let valoresModCol = {
                        idModeloVehiculo: colorModelo.idModeloVehiculo,
                        idColor: colorModelo.idColor
                    }
                    if (arrayImagenes) {
                        imagenes[indexImagenes] = arrayImagenes
                        let li = `<li>${color.color}<li>`
                        let urlImagen = sessionStorage.urlApi + 'public/' + arrayImagenes.imagenes[0]['imagen']
                        cargarImagenColorModelo(li, urlImagen, indexImagenes, valoresModCol)
                    } else {
                        imagenes[indexImagenes] = []
                        cargarNombreColorModelo(color, indexImagenes, valoresModCol)  
                    }
                });
            }
        })
    }

    function cargarImagenColorModelo(li, urlImagen = '', indexImagenes, valoresModCol) {
        $("<img/>")
        .on('load', function() { 
            if ($("#coloresDisponibles ul .fa-spinner").length)
                $("#coloresDisponibles ul").html('');
            $("#coloresDisponibles ul").append(li).append(this)
        })
        .on('error', function(error) { 
            if ($("#coloresDisponibles ul .fa-spinner").length)
                $("#coloresDisponibles ul").html('');
            $("#coloresDisponibles ul").append(li).append("Sin imágenes.")
        })
        .on('click', clickImagenColorModelo)
        .attr("src", urlImagen)
        .attr("id", indexImagenes)
        .attr("class", "img-fluid imgColorModelo");
    }
    
    function cargarNombreColorModelo(color, indexImagenes, valoresModCol) {
        if ($("#coloresDisponibles ul .fa-spinner").length)
            $("#coloresDisponibles ul").html('');
        let li = `<li>${color.color}<li>`
        $("#coloresDisponibles ul").append(li).append("Sin imágenes")
    }

    function clickImagenColorModelo() {
        $("#modalCarrusel").modal('show')
        $("#carruselImagenes .carousel-inner").html('')
        let indexImagenes = $(this).attr("id")
        let arrayImagenes = imagenes[indexImagenes].imagenes
        let divsCarrusel = ''
        arrayImagenes.map(function(imagen, key) {
            let urlImagen = sessionStorage.urlApi + 'public/' + imagen.imagen
            if (key == 0) {
                divsCarrusel = divs("carousel-item active")
            } else {
                divsCarrusel = divs("carousel-item")
            }
            let divsCaption = divs("carousel-caption d-none d-md-block")
            cargarImagenesColorModeloCarrusel(divsCarrusel, divsCaption, urlImagen)
        })

        function cargarImagenesColorModeloCarrusel(divsImg, divsCaption, urlImagen = '') {
            let img = $("<img/>")
            .on('load', function() { 
                let div = $(`${divsImg.apertura}${divsImg.cierre}`).append(this)
                $("#carruselImagenes .carousel-inner").append(div)
            })
            .attr("alt", "Imagen de auto")
            .attr("src", urlImagen)
            .attr("class", "d-block w-100 img-fluid");
        }
    }

    return {
        init: init
    }
}

// function obtenerSucursales() {
//     var sucursalesModel = Model(sessionStorage.urlApi + 'sucursales');
//     sucursalesModel.all().then(function(sucursales) {
        
//     })
// }

function clickBtnVerificarExistencia() {
    $("#btnVerificarExistencia").click(function() {
        let idModelo = $(this).attr("data-id-modelo");
        obtenerExistenciaVehiculos(idModelo)
    })
}

function obtenerExistenciaVehiculos(idModelo) {
    var stockModel = Model(sessionStorage.urlApi + 'stock');
    stockModel.find("/porModelo/" + idModelo).then(vehiculos => {
        console.log(vehiculos)
        vehiculos.map(function(vehiculo) {
            let tds = `
                <td>${vehiculo.sucursal}</td>
                <td>${vehiculo.numeroSerie}</td>
                <td>
                    <button type="button" data-id-vehiculo="${vehiculo.idVehiculo}" class="solicitarVehiculo btn btn-info">
                    Solicitar vehículo
                    </button>
                </td>
            `
            let tr = $("<tr></tr>").append($(tds))
            $("#catalogoExistencia tbody").append(tr)
        })
        clickSolicitarVehiculo();
})
}

function clickSolicitarVehiculo() {
    $(".solicitarVehiculo").unbind("click").click(function() {
        $("#modalExistencia").modal("hide");
        $("#modalSolicitud").modal("show");
    })
}