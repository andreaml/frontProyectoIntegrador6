sessionStorage.setItem('urlApi', 'http://localhost/volkswagen/');
var configuracionLeyendasTabla = {
    lengthMenu: "Mostrar _MENU_ resultados",
    search: "Buscar:",
    zeroRecords: "Lo sentimos, no se encontraron resultados",
    info: "Mostrando _PAGE_ de _PAGES_ resultados",
    infoEmpty: "No hay resultados disponibles",
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
  

function habilitarElemento(selectorElemento, boolHabilitar) {
    $(selectorElemento).prop('disabled', !boolHabilitar);
}