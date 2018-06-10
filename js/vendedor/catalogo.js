var modelos;
function clickVerVehiculo() {
    $(".card button").click(function() {
        $(this).closest(".div-modelo").siblings(".div-modelo").toggle();
        let nombreModelo = $("#modelo").val();
        let anio = $("#anio").val();
        let version = $("#version").val();
        cargarCaracteristicasModelo(nombreModelo, anio, version);
    })
}

function cargarCaracteristicasModelo(nombreModelo, anio, version) {
    let modeloSeleccionado = modelos.map(function(modelo) {
        if (modelo.modelo == nombreModelo && modelo.anio == anio && modelo.version == version) {
            return modelo 
        }
    });
    modeloSeleccionado = modeloSeleccionado[0];
    $.each(modeloSeleccionado, function(key, caracteristica) {
        $(`table .${key}`).text(caracteristica)
    })
}

function cargarModelosPorCategoria(idCategoria) {
    $.get(`${sessionStorage.urlApi}modelos/porCategoria/${idCategoria}`)
    .done(function(respuesta) {
        if (respuesta.status) {
            modelos = respuesta.data;
            cargarModelosEnSelect();
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

function cargarModelosEnSelect() {
    let datosModelosOption = modelos.map(function(modelo) {
        return {texto: modelo.modelo, valor: modelo.modelo}
    });
    cargarValoresSelect("modelo", datosModelosOption);
}

function cargarAniosEnSelect(nombreModelo) {
    let datosAnioOption = modelos.map(function(modelo) {
        if (modelo.modelo == nombreModelo) 
            return {texto: modelo.anio, valor: modelo.anio}
    });
    cargarValoresSelect("anio", datosAnioOption);
}

function cargarVersionesEnSelect(nombreModelo, anio) {
    let datosVersionesOption = modelos.map(function(modelo) {
        if (modelo.modelo == nombreModelo && modelo.anio == anio) 
            return {texto: modelo.version, valor: modelo.version}
    });
    cargarValoresSelect("version", datosVersionesOption);
}

function seleccionModelo() {
    $("#modelo").on("change", function() {
        cargarAniosEnSelect($(this).val())
    })
}

function seleccionAnio() {
    $("#anio").on("change", function() {
        let nombreModelo = $("#modelo").val();
        let anio = $(this).val();
        cargarVersionesEnSelect(nombreModelo, anio);
    })
}

function init() {
    clickVerVehiculo();
    cargarModelosPorCategoria(idCategoria);
    seleccionModelo();
    seleccionAnio();
}

init();