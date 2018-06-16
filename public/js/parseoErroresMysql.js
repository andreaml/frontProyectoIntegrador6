const errorMysql = {
    '1062': 'ya existente, ingrese datos diferentes, por favor.',
    'default': 'Error interno. Inténtelo de nuevo más tarde, por favor.'
}

function mensajeError(codigoError, prefijoMensaje) {
    if(!isNaN(codigoError)) {
        return `${prefijoMensaje} ${errorMysql[codigoError]}`;
    } else {
        return errorMysql['default'];
    }
}