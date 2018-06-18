var Comparador = function() {
  var _api = null;
  var _modelosAutos = null;
  var _idComponente = null;

  function init(api, idComponente) {
    _api = api;
    _idComponente = idComponente;
    obtenerModelos();
    iniciarEventos();
  }

  function iniciarEventos() {
    var selectModelo = $(`#${_idComponente} .selectModelo`);
    selectModelo.change(function(event) {
      cambiarVariantes(event.currentTarget.value);
    });
    var selectVariante = $(`#${_idComponente} .selectVariante`);
    selectVariante.change(function(event) {
      desplegarVariante(event.currentTarget.value);
    })
  }

  function obtenerModelos() {
    _api.all()
      .then(function(modelosAutos) {
        _modelosAutos = modelosAutos;
        desplegarOpciones();
      });
  }

  function desplegarOpciones() {
    var selectModelo = $(`#${_idComponente} .selectModelo`);
    selectModelo.empty();
    modelos.forEach(function(itemModelo) {
      selectModelo.append(`<option value="${itemModelo.id}">${itemModelo.nombre}</option>`);
    });
  }

  function cambiarVariantes(idModelo) {
    var modeloAutos = obtenerModeloAuto(idModelo);
    var selectVariante = $(`#${_idComponente} .selectVariante`);
    modeloAutos.variantes.forEach(function(variante) {
      selectVariante.append(`<option value="${variante.id}">${variante.nombre}</option>`);
    });
  }

  function obtenerModeloAuto(idModelo) {
    return _modelosAutos.filter(function(itemModelo) {
      return itemModelo.idModelo = idModelo;
    })[0];
  }

  function desplegarVariante(idVariante) {
    // TODO buscar la info de la variante y desplegarla en la tabla
  }

  return {
    init
  };
}

var comparador1 = Comparador();
comparador1.init(api, idComponente);
