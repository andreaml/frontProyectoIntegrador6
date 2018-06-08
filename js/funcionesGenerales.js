sessionStorage.setItem('urlApi', 'http://localhost/volkswagen/');
var configuracionLeyendasTabla = {
    lengthMenu: "Mostrar _MENU_ resultados",
    search: "Buscar:",
    zeroRecords: "Lo sentimos, no se encontraron resultados",
    info: "Mostrando _PAGE_ de _PAGES_ resultados",
    infoEmpty: "No hay resultados disponibles",
    infoFiltered: "(filtrado de un total de _MAX_ elementos)",
    paginate: {
        first:    'Primera',
        previous: '« Anterior',
        next:     'Siguiente »',
        last:     'Última'
    }
}
const notificacionEsquina = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 5000
});

const notificacionCentro = swal.mixin({
    confirmButtonClass: 'btn btn-primary',
    cancelButtonClass: 'btn btn-danger',
    buttonsStyling: false,
});

//Se agrega función 'isValid' a librería de jQuery.
$.fn.isValid = function(){
    return this[0].checkValidity()
}

function habilitarElemento(selectorElemento, boolHabilitar) {
    $(selectorElemento).prop('disabled', !boolHabilitar);
}

function validarInput(input) {
    let formGroup = $(input).closest('.form-group, .input-group'); 
    if(!formGroup.hasClass('was-validated')) {
        formGroup.addClass('was-validated');
    }
    if (!input.checkValidity()) {
        $(input).siblings('.invalid-feedback').text(input.validationMessage);
    }
}

function vincularEventoKeyupConInput() {
    $('.form-control').unbind('keyup').on('keyup', function() {
        validarInput(this);
    });
}

$(function () {
    $('[data-toggle="popover"]').popover()
})

function cargarValoresSelect(idSelect, listaOpciones) {
    $(`#${idSelect}`).empty().attr('disabled', false);
    $.each(listaOpciones, function(key, value) {
        let opcion = new Option(value.texto, value.valor);
        $(`#${idSelect}`).append(opcion);
    });
    $(`#${idSelect}`).trigger('change');
}

vincularEventoKeyupConInput();