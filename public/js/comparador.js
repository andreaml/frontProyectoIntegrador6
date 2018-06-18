var marcas
$('document').ready(function () {
    Modelos().init(sessionStorage.urlApi + 'modelos/publico').then(function(arrayDatos){
        marcas['1'] = arrayDatos
    })
    // let marca2 = Modelos().init('http://casabi.ddns.net/api/ComparadorExt')
    Modelos().init('http://192.168.1.10:3000/api/ComparadorExt').then(function(arrayDatos) {
        marcas['2'] = arrayDatos
    })
    // cargarSelects()
    cargarSelects()
})

const MARCAS = [
    {
        texto: "Volkswagen",
        valor: 1
    },
    {
        texto: "Nissan",
        valor: 2
    }
]

const tabla1 = "tablaCaracteristicasModelo1";
const tabla2 = "tablaCaracteristicasModelo2";


function Modelos() {
    var modelosModel;
    var MODELOS
    var VARIANTES
    var CARACTERISTICAS

    function init(model, _idTabla) {
        return new Promise(function(resolve, reject) {
            modelosModel = Model(model)
            modelosModel.search()
                .then(modelos => {
                    MODELOS = modelos.map(function(modelo, key) {
                        return modelo.nombre
                    });
                    VARIANTES = modelos.map(function(modelo, key){
                        return modelo.variantes.map(function(variante, key2) {
                            return variante.nombre 
                        })
                    })
                    CARACTERISTICAS = modelos.map(function(modelo, key) {
                        return modelo.variantes.map(function(variante, key2) {
                            return {
                                modelo: modelo.nombre,
                                variante: variante.nombre,
                                precio: variante.precio,
                                dimensiones: function() {
                                    if (modelo.dimensiones)
                                        return 'Alto: ' + modelo.dimensiones.alto + ' <br>Ancho: ' + modelo.dimensiones.ancho + ' <br>Largo: ' + modelo.dimensiones.largo
                                    else
                                        return ''    
                                },
                                rendimiento: variante.rendimiento,
                                potencia: variante.potencia,
                                torque: variante.torque,
                                transmision: variante.transmision,
                                traccion: variante.traccion
                            }
                        })
                    })
                    resolve([MODELOS, VARIANTES, CARACTERISTICAS]);
                })
                .catch(error => {
                    reject(error);
                    notificacionCentro({
                        type: 'warning',
                        text: 'No hay modelos disponibles por el momento.'
                    })
                })
        })
    }

    function getMarcas() {
        return MARCAS
    }
    function getModelos() {
        return MODELOS
    }
    function getVariantes() {
        return VARIANTES
    }
    function getCaracteristicas() {
        return CARACTERISTICAS
    }

    return {
        init: init,
        marcas: getMarcas,
        modelos: getModelos,
        variantes: getVariantes,
        caracteristicas: getCaracteristicas
    }
}



function cargarSelects() {
    cargarSelectMarca();
    cargarSelectVariantes();
}

function cargarSelectMarca() {
    cargarValoresSelect(tabla1 + " .selectMarca", MARCAS);
    cargarValoresSelect(tabla2 + " .selectMarca", MARCAS);
    cargarSelectModelos();
}

function cargarSelectModelos() {
    $("#" + tabla1 + " .selectMarca").on("change", function() {
        console.log('click')
        cargarValoresSelect(tabla1 + " .selectModelo", marcas[$(this).val()][0]);
    })
}

function cargarSelectVariantes() {

}

function clickVerModelo() {
    $(`#${idTabla} tbody`).on('click', '.btnVerModelo', function () {
        $(this).closest(".div-modelo").siblings("#caracteristicasModelo").fadeIn();
        let idModelo = $(this).attr("data-id-modelo");
        $("#btnVincularColorModelo").attr("data-id-modelo", idModelo)
        cargarCaracteristicasModelo(idModelo);
        cargarColoresModelo(idModelo);
    })
}

function cargarCaracteristicasModelo(idModelo) {
    let modeloSeleccionado = MODELOS.filter(function (modelo) {
        if (modelo.idModeloVehiculo == idModelo) {
            return modelo
        }
    });
    modeloSeleccionado = modeloSeleccionado[0];
    $(".nombre-modelo").text(modeloSeleccionado.modelo)
    $.each(modeloSeleccionado, function (key, caracteristica) {
        $(`table .${key}`).text(caracteristica)
    })
    $("#btnEditar").attr("data-id-modelo", idModelo)
    idModeloActual = null
}
