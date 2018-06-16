var modelos;
var idModeloActual;
var colores;
var imagenes = {};
var configuracionColumnasTabla = [
    {
        title: 'ID',   
        data: 'idModeloVehiculo',
    },
    {
        title: 'Modelo',   
        data: 'modelo'
    },
    {
        title: 'Año',   
        data: 'anio'
    },
    {
        title: 'Versión',   
        data: 'version'
    },
    {
        // Columna para botón editar
        data: ''
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
            // return `<a href="#" class="text-secondary btnEditarModelo" data-toggle="modal" data-target="#modalEditar" data-modelo="${encodeURIComponent(JSON.stringify(modelo))}">
            //         Editar <i class="fa fa-pencil" aria-hidden="true"></i>
            //     </a>`
    }
    
}
var idTabla = "tablaModelos";
var elementosSeleccionados = {}
var dataTable;

function clickVerModelo() {
    $(`#${idTabla} tbody`).on( 'click', '.btnVerModelo', function () {
        $(this).closest(".div-modelo").siblings("#caracteristicasModelo").fadeIn();
        let idModelo = $(this).attr("data-id-modelo");
        $("#btnVincularColorModelo").attr("data-id-modelo", idModelo)
        cargarCaracteristicasModelo(idModelo);
        cargarColoresModelo(idModelo);
    })
}

function cargarCaracteristicasModelo(idModelo) {
    let modeloSeleccionado = modelos.filter(function(modelo) {
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
    colores.map(function(color) {
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
            cargarColoresModeloModalGestionarColores(color, colorModelo.idModeloVehiculo)
        }
    })
}

function botonAgregarImagen(indexImagenes, valoresModCol) {
    return $("<button>Agregar imagen</button>")
    .attr("data-id-color", valoresModCol.idColor)
    .attr("data-id-modelo", valoresModCol.idModeloVehiculo)
    .attr("id", indexImagenes)
    .attr("class", "btn btn-link")
    .on('click', clickAgregarImagen)
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
        $("#coloresDisponibles ul").append(li).append(botonAgregarImagen(indexImagenes, valoresModCol))
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
    $("#coloresDisponibles ul").append(li).append(botonAgregarImagen(indexImagenes, valoresModCol))
}

function cargarModelosPorCategoria(idCategoria) {
    $.get(`${sessionStorage.urlApi}modelos/porCategoria/${idCategoria}`)
    .done(function(respuesta) {
        if (respuesta.status) {
            modelos = respuesta.data;
            mostrarModelos(respuesta.data);
        } else {
            notificacionCentro({
                type: 'error',
                title: 'Ocurrió un error al cargar los modelos.',
                text: 'Inténtelo de nuevo, por favor.'
            })
        }
    })
    .fail(function(){
        notificacionCentro({
            type: 'error',
            title: 'Ocurrió un error al cargar los modelos.',
            text: 'Inténtelo de nuevo, por favor.'
        })
    })
}

function mostrarModelos(arrayModelos) {
    if (dataTable) {
        if (idModeloActual) {
            cargarCaracteristicasModelo(idModeloActual)            
        }
        actualizarTabla(arrayModelos);
    } else {
        cargarTabla(arrayModelos);
    }
}

function actualizarSeleccionElementosTabla(dataTable){
    let $dataTable         = dataTable.table().node();
    let $chkbox_all        = $('tbody input[type="checkbox"]', $dataTable);
    let $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $dataTable);
    let chkbox_select_all  = $('thead input[name="select_all"]', $dataTable).get(0);
    // habilitarElemento('#btnDeshabilitarModelo', true);
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
    // habilitarElemento('#btnDeshabilitarModelo', false);
}

function cargarTabla(arrayDatos) {
    dataTable = $(`#${idTabla}`).DataTable({
        columns: configuracionColumnasTabla,
        columnDefs: [configuracionBotonesEditarTabla],
        data: arrayDatos,
        // initComplete: function(settings) {
        //     actualizarSeleccionElementosTabla(settings.oInstance.api())
        // },
        language: configuracionLeyendasTabla,
        lengthMenu: [5,10],
        order: [[2, 'desc']],
        responsive: true,
        rowCallback: function(row, data, dataIndex){
            if (data.activo === '0') {
                $(row).addClass('filaInactiva').find('input[type="checkbox"]').prop('disabled', true);
            }
            var idFila = data.idModeloVehiculo;
            // Si idFila se encuentra en elementosSeleccionados
            if(elementosSeleccionados[idFila]){
               $(row).find('input[type="checkbox"]').prop('checked', true);
               $(row).addClass('selected');
            }
        }
    });
    clickVerModelo();
    // clickEditarModelo();
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
        var idFila = data.idModeloVehiculo;
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

function clickModalAgregarModelo() {
    $("#btnModalAgregarModelo").on('click', function() {
        let formulario = $("#modalAgregar form");
        let formularioValido = formulario.isValid();
        if (formularioValido) {
            let parametros = valoresFormularioModelo('modalAgregar');
            agregarModelo(parametros);
        } else {
            let inputsFormulario = formulario.find('.form-control');
            $.each(inputsFormulario, function(llave, input) {
                validarInput(input);
            });
        }
    });
}

function valoresFormularioModelo(idModalFormulario) {
    let paramsFormulario = $(`#${idModalFormulario} form`).serialize();
    let paramsManuales = {
        idCategoria: idCategoria,
        idUsuarioCreador: 1
    }
    return `${paramsFormulario}&${$.param(paramsManuales)}`
}

function agregarModelo(parametros) {
    $.post(`${sessionStorage.urlApi}modelos/nuevo`, parametros)
    .done(function(respuesta) {
        if (respuesta.status) {
            $("#modalAgregar").modal('hide');
            cargarModelosPorCategoria(idCategoria);
            notificacionEsquina({
                type: 'success',
                title: 'Modelo añadido con éxito.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: mensajeError(respuesta.error.code, 'Modelo')
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

function clickEditarModelo() {
    $(`#caracteristicasModelo #btnEditar`).on( 'click', function () {
    let idModelo = $(this).attr('data-id-modelo');
        asociarInformacionAModalEditar(idModelo);
    });
}

function asociarInformacionAModalEditar(idModelo) {
    let modeloSeleccionado = modelos.filter(function(modelo) {
        if (modelo.idModeloVehiculo == idModelo) {
            return modelo 
        }
    });
    modeloSeleccionado = modeloSeleccionado[0];
    $.each(modeloSeleccionado, function(key, caracteristica) {
        if (key=="aireAcondicionado") {
            $(`#modalEditar form [name=${key}]`).val(`\\${caracteristica}`).change()
        } else {
            $(`#modalEditar form [name=${key}]`).val(caracteristica)
        }

    })
}

function clickModalEditarModelo() {
    $("#btnModalEditarModelo").on('click', function() {
        let formulario = $("#modalEditar form");
        let formularioValido = formulario.isValid();
        if (formularioValido) {
            let parametros = valoresFormularioModelo("modalEditar");
            let idModelo = $("#btnEditar").attr('data-id-modelo');
            editarModelo(parametros, idModelo);
        } else {
            let inputsFormulario = formulario.find('.form-control');
            $.each(inputsFormulario, function(llave, input) {
                validarInput(input);
            });
        }
    });
}

function editarModelo(parametros, idModelo) {
    $.ajax({
        crossDomain: true,
        data: parametros,
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'accept': 'application/json'
        },
        method: 'PUT',
        url: `${sessionStorage.urlApi}modelos/${idModelo}`, 
    })
    .done(function(respuesta) {
        if (respuesta.status) {
            $("#modalEditar").modal('hide');
            idModeloActual = idModelo
            cargarModelosPorCategoria(idCategoria)
            notificacionEsquina({
                type: 'success',
                title: 'Modelo modificado con éxito.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: mensajeError(respuesta.error.code, 'Modelo')
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

function cargarColoresModeloModalGestionarColores(colorModelo, idModelo) {
    let tdColores = `
    <tr data-id-color=${colorModelo.idColor}>
    <td>${colorModelo.color}
    <td>
        <button type="button" data-id-modelo="${idModelo}" data-id-color="${colorModelo.idColor}" class="btn btn-light text-danger borrarColorModelo">
            <span class="fa fa-trash"></span>
        </button>
    `
    $("#modalGestionarColoresModelo table tbody").append(tdColores)
    clickBorrarColorModelo()
}

function clickBorrarColorModelo() {
    $(".borrarColorModelo").unbind("click").on("click", function() {
        let idModeloVehiculo = $(this).attr("data-id-modelo")
        let idColor = $(this).attr("data-id-color")
        borrarColorModelo(idModeloVehiculo, idColor)
    })
}

function borrarColorModelo(idModeloVehiculo, idColor) {
    $.ajax({
        crossDomain: true,
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'accept': 'application/json'
        },
        method: 'DELETE',
        url: `${sessionStorage.urlApi}colores/eliminarPorModelo/${idModeloVehiculo}/${idColor}`, 
    })
    .done(function(respuesta) {
        if (respuesta.status) {
            cargarColoresModelo(idModeloVehiculo);
            notificacionEsquina({
                type: 'success',
                title: 'Color desvinculado con éxito.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: mensajeError(respuesta.error.code, 'Color')
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

function cargarColoresSelectModalGestionarColoresModelo() {
    let listaColores = $.map(colores, function(color) {
        return { texto: `${color.color}`, valor: color.idColor };
    });
    cargarValoresSelect("selectColores", listaColores)
}

function detectarCambioSelectColores() {
    $("#selectColores").on("change", function() {
        let idColor = $(this).val()
        let colorVinculado = $(`#coloresVinculados tr[data-id-color="${idColor}"]`)
        if (colorVinculado.length) {
            $("#btnVincularColorModelo").attr("disabled", true)
        } else {
            $("#btnVincularColorModelo").attr("disabled", false)
        }
    })
}

function clickVincularColorModelo() {
    $("#btnVincularColorModelo").on("click", function() {
        let idModeloVehiculo = $(this).attr("data-id-modelo")
        let idColor = $("#selectColores").val()
        let parametros = {
            idModeloVehiculo: idModeloVehiculo,
            idColor: idColor
        }
        vincularColorModelo(parametros)
    })
}

function vincularColorModelo(parametros) {
    $.post(`${sessionStorage.urlApi}colores/nuevaRelacionModeloColor`, parametros)
    .done(function(respuesta) {
        if (respuesta.status) {
            $("#btnVincularColorModelo").attr("disabled", true)
            cargarColoresModelo(respuesta.data.idModeloVehiculo);
            notificacionEsquina({
                type: 'success',
                title: 'Color vinculado con éxito.'
            });
        } else {
            notificacionEsquina({
                type: 'error',
                title: mensajeError(respuesta.error.code, 'Color')
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

function clickImagenColorModelo() {
    $("#modalCarrusel").modal('show')
    $("#carruselImagenes .carousel-inner").html('')
    let indexImagenes = $(this).attr("id")
    let arrayImagenes = imagenes[indexImagenes].imagenes
    let divsCarrusel = ''
    let botonEliminar = ''
    cargarValoresFormImagen("formImagen", arrayImagenes[0]);
    arrayImagenes.map(function(imagen, key) {
        let urlImagen = sessionStorage.urlApi + 'public/' + imagen.imagen
        if (key == 0) {
            divsCarrusel = divs("carousel-item active")
        } else {
            divsCarrusel = divs("carousel-item")
        }
        let divsCaption = divs("carousel-caption d-none d-md-block")
        botonEliminar = $(`
            <button type="button" class="btn btn-light eliminarImagenColorModelo" data-index-imagenes="${indexImagenes}" data-index-array="${key}" data-id-imagen="${imagen.idImagen}" data-nombre-imagen="${imagen.imagen}" data-modelo="${imagen.idModeloVehiculo}">
                <span class="fa fa-trash"></span>
                Eliminar imagen
            </button>`)
            .on('click', clickEliminarImagenColorModelo)
        cargarImagenesColorModeloCarrusel(divsCarrusel, divsCaption, urlImagen, botonEliminar)
    })
}

function cargarValoresFormImagen(idForm, datosImagen) {
    $("#" + idForm + " input[name='idModeloVehiculo']").val(datosImagen.idModeloVehiculo)
    $("#" + idForm + " input[name='idColor']").val(datosImagen.idColor)
    let nombreImagen = "mod_" + datosImagen.idModeloVehiculo + "_color_" + datosImagen.idColor;
    $("#" + idForm + " input[name='nombre_imagen']").val(nombreImagen)
}

function cargarImagenesColorModeloCarrusel(divsImg, divsCaption, urlImagen = '', botonEliminar) {
    let caption = $(`${divsCaption.apertura}${divsCaption.cierre}`).append($(botonEliminar))
    let img = $("<img/>")
    .on('load', function() { 
        let div = $(`${divsImg.apertura}${divsImg.cierre}`).append(this).append(caption)
        $("#carruselImagenes .carousel-inner").append(div)
    })
    .attr("alt", "Imagen de auto")
    .attr("src", urlImagen)
    .attr("class", "d-block w-100");
}

function clickEliminarImagenColorModelo() {
    let indexImagenes =  $(this).attr("data-index-imagenes")
    let indexArray =  $(this).attr("data-index-array")
    let idImagen = $(this).attr("data-id-imagen")
    let nombreImagen = $(this).attr("data-nombre-imagen")
    let idModeloVehiculo = $(this).attr("data-modelo")
    let idColor = $(this).attr("data-id-color")
    let itemCarousel = $(this).closest(".carousel-item")
    $.ajax({
        crossDomain: true,
        headers: {
            'content-type': 'application/x-www-form-urlencoded',
            'accept': 'application/json'
        },
        data: {
            nombre_imagen: nombreImagen
        },
        method: 'DELETE',
        url: `${sessionStorage.urlApi}imagen/${idImagen}`, 
    })
    .done(function(respuesta) {
        if (respuesta.status) {
            imagenes[indexImagenes].imagenes.splice(indexArray, 1); 
            $("img.imgColorModelo#" + indexImagenes).trigger('click');
            notificacionCentro({
                type: 'success',
                title: 'Imagen eliminada con éxito.'
            });
        } else {
            notificacionCentro({
                type: 'warning',
                title: 'Error interno. Por favor inténtelo de nuevo más tarde.'
            });
        }
    })
    .fail(function(error) {
        notificacionCentro({
            type: 'warning',
            title: 'Error en la conexión. Inténtelo de nuevo por favor.'
        });
    })
}

function clickAgregarImagen() {
    $("#modalAgregarImagen").modal("show");
    let idColor = $(this).attr("data-id-color")
    let idModeloVehiculo = $(this).attr("data-id-modelo")
    let datosImagen = {
        idColor: idColor,
        idModeloVehiculo: idModeloVehiculo
    }
    cargarValoresFormImagen("formAgregarImagen", datosImagen);
}

function _clickAgregarImagen() {
    $("#btnAgregarImagen").unbind("click").on("click", function() {
        if (validarInputImagen("formAgregarImagen")) {
            var formData = new FormData($("#formAgregarImagen")[0]);
            var message = ""; 
            //hacemos la petición ajax  
            $.ajax({
                url: `${sessionStorage.urlApi}imagen`,
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data, status, xhr) {
                    limpiarInputImagen("formAgregarImagen");
                    $("#modalAgregarImagen").modal("hide");
                    cargarColoresModelo(data.data.idModeloVehiculo)
                    $("img.imgColorModelo#" + indexImagenes).trigger('click');
                    notificacionCentro({
                        type: 'success',
                        title: 'Imagen subida con éxito'
                    })
                },
                error: function (err) {
                    notificacionCentro({
                        type: 'error',
                        title: 'Error al subir la imagen',
                        text: 'Inténtelo de nuevo más tarde, por favor.'
                    })
                }
            });
        } else {
            notificacionCentro({
                type: 'warning',
                title: 'Elija una imagen',
            })
        }
    })
}

function validarInputImagen(idFormulario) {
    let archivos = $("#" + idFormulario + " input[type='file']")[0].files.length
    return (archivos > 0)
}

function limpiarInputImagen(idFormulario) {
    $("#" + idFormulario + " input[type='file']").val('');
}

function clickSubirImagen() {
    $("#btnSubirImagen").unbind("click").on("click", function() {
        if (validarInputImagen("formImagen")) {
            var formData = new FormData($("#formImagen")[0]);
            var message = ""; 
            //hacemos la petición ajax  
            $.ajax({
                url: `${sessionStorage.urlApi}imagen`,
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data, status, xhr) {
                    limpiarInputImagen("formImagen");
                    let indexImagenes = data.data.idModeloVehiculo + '' + data.data.idColor
                    imagenes[indexImagenes].imagenes.push(data.data);
                    $("img.imgColorModelo#" + indexImagenes).trigger('click');
                    notificacionCentro({
                        type: 'success',
                        title: 'Imagen subida con éxito'
                    })
                },
                error: function (err) {
                    notificacionCentro({
                        type: 'error',
                        title: 'Error al subir la imagen',
                        text: 'Inténtelo de nuevo más tarde, por favor.'
                    })
                }
            });
        } else {
            notificacionCentro({
                type: 'warning',
                title: 'Elija una imagen',
            })
        }
    })
}

function mostrarNombreArchivoSeleccionado() {
    $('.custom-file-input').on('change', function() { 
        let nombreImagen = $(this).val().split('\\').pop()
        $(this).next('.custom-file-label').addClass("selected").html(nombreImagen)
    });
}

function init() {
    detectarCambioSelectColores()
    cargarModelosPorCategoria(idCategoria)
    cargarColores(function(arrayColores) {
        if (arrayColores) {
            colores = arrayColores
            cargarColoresSelectModalGestionarColoresModelo()
            clickVincularColorModelo()
        } else {
            $("#coloresDisponibles ul").html('Sin colores disponibles')            
        }
    });
    clickModalAgregarModelo()
    clickEditarModelo()
    clickModalEditarModelo()
    mostrarNombreArchivoSeleccionado()
    clickSubirImagen()
    _clickAgregarImagen()
}

init();