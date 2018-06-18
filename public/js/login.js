$(document).ready(function() {
    iniciarSesion();
})

function iniciarSesion() {
    $("#btnLogin").on('click', function() {
        let formulario = $(".div-login form");
        let formularioValido = formulario.isValid();
        if (formularioValido) {
            let parametros = $(".div-login form").serialize();
            login(parametros);
        } else {
            let inputsFormulario = formulario.find('.form-control');
            $.each(inputsFormulario, function(llave, input) {
                validarInput(input);
            });
        }
    });
}

function login(parametros) {
    $.post(sessionStorage.urlApi + "usuarios/login", parametros)
    .done(function(respuesta) {
        if(respuesta.status) {
            $.post(sessionStorage.baseUrl + 'doLogin',{userData: respuesta.data[0]}, function(result) {
                if (result==true){   
                    localStorage.setItem("idUsuarioActual", respuesta.data[0].idTrabajador)
                    if (respuesta.data[0].idRol == 1) {
                        window.location.href = sessionStorage.baseUrl + "gerenteGeneral/catalogo"
                    } else if (respuesta.data[0].idRol == 2) {
                        window.location.href = sessionStorage.baseUrl + "gerenteAgencia/stocks"
                    } else {
                        window.location.href = sessionStorage.baseUrl + "vendedor/catalogo"
                    }
                }
            });
        } else {
            notificacionCentro({
                type: 'warning',
                text: 'Usuario o contraseña incorrectos.'
            })
        }
    })
    .fail(function() {
        notificacionCentro({
            type: 'warning',
            text: 'Usuario o contraseña incorrectos.'
        })
    })
}



