const errorMysql = {
    '1062': 'ya existente, ingrese datos diferentes.',
    'default': 'Error interno. Inténtelo de nuevo por favor.'
}

function mensajeError(codigoError, prefijoMensaje) {
    if(!isNaN(codigoError)) {
        return `${prefijoMensaje} ${errorMysql[codigoError]}`;
    } else {
        return errorMysql['default'];
    }
}