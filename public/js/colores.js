function cargarColores(callback) {
    $.get(`${sessionStorage.urlApi}colores/`)
    .done(function(respuesta) {
        if (respuesta.status) {
            callback(respuesta.data)
        } else {
            callback(false)
        }
    })
    .fail(function() {
        callback(false)
    })
}

function cargarUrlImagenesColorModelo(idModeloVehiculo, idColor, callback) {
    console.log(idModeloVehiculo, idColor)
    $.get(`${sessionStorage.urlApi}imagen/${idModeloVehiculo}/${idColor}`)
    .done(function(respuesta) {
        if (respuesta.status) {
            callback(respuesta.data)
        } else {
            callback(false)
        }
    })
    .fail(function(){
        callback(false)
    })
}