function Comparador() {
  this._api = null;
  this._modelosAutos = null;
  this._idComponente = null;
}

Comparador.prototype.init = function (api, idComponente) {
    this._api = api;
    this._idComponente = idComponente;
    this.obtenerModelos();
    this.iniciarEventos();
}

Comparador.prototype.iniciarEventos = function () {
    var selectModelo = $(`#${this._idComponente} .selectModelo`);
    selectModelo.change(function(event) {
      this.cambiarVariantes(event.currentTarget.value);
    });
    var selectVariante = $(`#${this._idComponente} .selectVariante`);
    selectVariante.change(function(event) {
      this.desplegarVariante(event.currentTarget.value);
    })
  }

  Comparador.prototype.obtenerModelos = function() {
    this._api.search()
      .then(function(modelosAutos) {
        _modelosAutos = modelosAutos;
        this.desplegarOpciones();
      });
  }

Comparador.prototype.desplegarOpciones = function() {
	console.log(this.modeloAutos)
    var selectModelo = $(`#${this._idComponente} .selectModelo`);
	selectModelo.empty();
    this._modelosAutos.forEach(function(itemModelo) {
      selectModelo.append(`<option value="${itemModelo.nombre}">${itemModelo.nombre}</option>`);
    });
  }

Comparador.prototype.cambiarVariantes = function(idModelo) {
    var modeloAutos = obtenerModeloAuto(idModelo);
    var selectVariante = $(`#${this._idComponente} .selectVariante`);
    selectVariante.empty();
    modeloAutos.variantes.map(function(variante) {
      selectVariante.append(`<option value="${variante.nombre}">${variante.nombre}</option>`);
    });
  }

Comparador.prototype.obtenerModeloAuto = function(idModelo) {
    return _modelosAutos.filter(function(itemModelo) {
      return itemModelo.idModelo = idModelo;
    })[0];
  }

Comparador.prototype.desplegarVariante = function(idVariante) {
    // TODO buscar la info de la variante y desplegarla en la tabla
  }


var comparador1 = new Comparador();
comparador1.init(Model(sessionStorage.urlApi + 'modelos/publico'), 'tablaCaracteristicasModelo1');
var comparador2 = new Comparador();
comparador2.init(Model('http://192.168.1.10:3000/api/ComparadorExt'), 'tablaCaracteristicasModelo2');
