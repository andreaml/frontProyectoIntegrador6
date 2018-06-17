var configuracionColumnasTabla = [{
        data: 'numeroSerie',
        // defaultContent: ''
    },
    {
        data: 'color',
        // defaultContent: ''
    },
    {
        data: 'sucursal',
        // defaultContent: ''
    },
    {
        data: 'estado',
        // defaultContent: ''
    },
    {
        data: '',
        defaultContent: ''
    }
]
var configuracionBotonesEditarTabla = {
    targets: [-1],
    searchable: false,
    orderable: false,
    className: 'dt-body-center',
    render: function (data, type, vehiculo) {
        if (vehiculo.estado == 'Enviado') {
            vehiculo["_id"] = vehiculo.idVehiculo;
            return `<button type="button" class="btnEditar btn btn-primary mr-2 mb-2" data-toggle="modal" data-target="#modalEditar" data-vehiculo="${encodeURIComponent(JSON.stringify(vehiculo))}">
                        Editar <i class="fa fa-pencil" aria-hidden="true"></i>
                    </button>`
        }
    }
}
var SUCURSALES, MODELOS, VEHICULOS, COLORES
var datosBusqueda = {
    idCategoria: '1',
    categoria: '',
    modelo: '',
    anio: '',
    version: ''
}

$('document').ready(function () {
    $("[name='idUsuarioCreador']").val(localStorage.idUsuarioActual);
    cargarColores(function (colores) {
        if (colores) {
            COLORES = colores;
        }
    })
    Sucursales()
    Modelos().init()
})

function Sucursales() {
    var sucursalesModel = Model(sessionStorage.urlApi + 'sucursales');
    var sucursalesParaSelect = [];
    sucursalesModel.all().then(sucursales => {
            SUCURSALES = sucursales
            sucursalesParaSelect = sucursales.map(function (sucursal) {
                return {
                    texto: sucursal.sucursal,
                    valor: sucursal.idSucursal
                }
            })
            cargarValoresSelect("modalAgregarSucursal, #modalEditarSucursal", sucursalesParaSelect);
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: 'No hay sucursales disponibles por el momento.'
            })
        })
}

function Categorias() {
    var categoriasModel = Model(sessionStorage.urlApi + 'categorias');
    var categoriasParaSelect = [];
    var CATEGORIAS

    function init() {
        CATEGORIAS = [{
                categoria: "Autos familiares",
                idCategoria: "1"
            },
            {
                categoria: "Autos deportivos",
                idCategoria: "2"
            },
            {
                categoria: "Camionetas",
                idCategoria: "3"
            },
            {
                categoria: "Autos de negocios",
                idCategoria: "4"
            }
        ]
        categoriasParaSelect = CATEGORIAS.map(function (categoria) {
            return {
                texto: categoria.categoria,
                valor: categoria.idCategoria
            }
        })
        cargarValoresSelect("selectCategoria", categoriasParaSelect);
    }

    return {
        init: init
    }
}

function Modelos() {
    var modelosModel = Model(sessionStorage.urlApi + 'modelos');
    var modelosParaSelect = [];

    function init() {
        modelosModel.all()
            .then(modelos => {
                MODELOS = modelos
                Modelos().initCargaSelects()
            })
            .catch(error => {
                notificacionCentro({
                    type: 'warning',
                    text: 'No hay modelos disponibles por el momento.'
                })
            })
    }

    function cargarCategoriasEnSelect() {
        Categorias().init();
    }

    function cargarModelosEnSelect() {
        $("#selectCategoria").on("change", function () {
            datosBusqueda.idCategoria = $(this).val();
            datosBusqueda.categoria = $(this).find("option:selected").text();
            let modelosParaSelect = filtrarArrayObjetos(MODELOS, ['idCategoria'], [datosBusqueda.idCategoria]);
            modelosParaSelect = [...new Set(modelosParaSelect.map(item => item.modelo))];
            modelosParaSelect = modelosParaSelect.map(function (modelo) {
                return {
                    texto: modelo,
                    valor: modelo
                }
            })
            cargarValoresSelect("selectModelo", modelosParaSelect)
        })
    }

    function cargarAniosEnSelect() {
        $("#selectModelo").on("change", function () {
            datosBusqueda.modelo = $(this).val();
            let aniosParaSelect = filtrarArrayObjetos(MODELOS, ['idCategoria', 'modelo'], [datosBusqueda.idCategoria, datosBusqueda.modelo]);
            aniosParaSelect = [...new Set(aniosParaSelect.map(item => item.anio))];
            aniosParaSelect = aniosParaSelect.map(function (anio) {
                return {
                    texto: anio,
                    valor: anio
                }
            })
            cargarValoresSelect("selectAnio", aniosParaSelect)
        })
    }

    function cargarVersionesEnSelect() {
        $("#selectAnio").on("change", function () {
            datosBusqueda.anio = $(this).val();
            let versionesParaSelect = filtrarArrayObjetos(MODELOS, ['idCategoria', 'modelo', 'anio'], [datosBusqueda.idCategoria, datosBusqueda.modelo, datosBusqueda.anio]);
            versionesParaSelect = [...new Set(versionesParaSelect.map(item => item.version))];
            versionesParaSelect = versionesParaSelect.map(function (version) {
                return {
                    texto: version,
                    valor: version
                }
            })
            cargarValoresSelect("selectVersion", versionesParaSelect)
        })
    }

    function cargarVersionEnDatosBusqueda() {
        $("#selectVersion").on("change", function () {
            datosBusqueda.version = $(this).val();
        })
    }

    function getDatosBusqueda(callback) {
        callback(datosBusqueda)
    }

    function getResultadoBusqueda() {
        let modeloBusqueda = filtrarArrayObjetos(MODELOS, ['idCategoria', 'modelo', 'anio', 'version'], [datosBusqueda.idCategoria, datosBusqueda.modelo, datosBusqueda.anio, datosBusqueda.version]);
        return modeloBusqueda[0];
    }

    function initCargaSelects() {
        cargarModelosEnSelect()
        cargarAniosEnSelect()
        cargarVersionesEnSelect()
        cargarVersionEnDatosBusqueda()
        cargarCategoriasEnSelect()
        Stock().init()
    }

    return {
        init: init,
        initCargaSelects: initCargaSelects,
        resultadoBusqueda: getResultadoBusqueda
    }
}

function Stock() {
    var stockModel = Model(sessionStorage.urlApi + 'stock');
    var vehiculosParaSelect = [];
    var vehiculosAgregados = []
    var valoresActuales = {}

    function init() {
        stockModel.all().then(vehiculos => {
            VEHICULOS = vehiculos
            Stock().cargarStock();
            clickBuscarVehiculos();
            clickAgregarVehiculos();
            clickAgregarVehiculo();
            clickAgregarStock();
            clickEditarVehiculo();
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                text: 'No hay vehiculos disponibles por el momento.'
            })
        })
    }

    function clickBuscarVehiculos() {
        $("#buscarVehiculos").unbind('click').click(function () {
            cargarStockPorModelo();
        })
    }
        
    function cargarStockPorModelo() {
        let modelo = Modelos().resultadoBusqueda()
        let vehiculosBusqueda = filtrarArrayObjetos(VEHICULOS, ['idModelo'], [modelo.idModeloVehiculo]);
        vehiculosBusqueda = vehiculosBusqueda.map(function (vehiculo) {
            let color = COLORES.filter(function (val) {
                if (val.idColor == vehiculo.idColor)
                    return true;
            })
            let sucursal = SUCURSALES.filter(function (val) {
                if (val.idSucursal == vehiculo.idSucursal)
                    return true;
            })
            vehiculo['color'] = color[0].color
            vehiculo['sucursal'] = sucursal[0].sucursal
            return vehiculo
        })
        $("#btnAgregarVehiculos").attr("data-id-modelo", modelo.idModeloVehiculo)
        cargarSelectColoresPorModelo(modelo.idModeloVehiculo)
        cargarTabla(vehiculosBusqueda)
        cambiarLeyendaModales()
    }

    function cargarSelectColoresPorModelo(idModeloVehiculo) {
        cargarColoresPorModelo(idModeloVehiculo, function (coloresModelo) {
            coloresParaSelect = coloresModelo.map(function (colorModelo) {
                let color = COLORES.filter(function (val) {
                    if (val.idColor == colorModelo.idColor)
                        return true;
                })
                return {
                    texto: color[0].color,
                    valor: color[0].idColor
                }
            })
            cargarValoresSelect("modalAgregarColor, #modalEditarColor", coloresParaSelect);
        })
    }

    function clickAgregarVehiculos() {
        $("#btnAgregarVehiculos").unbind('click').click(function () {
            valoresActuales['idModelo'] = $(this).attr("data-id-modelo")            
        })
    }

    function cambiarLeyendaModales() {
        let leyendaModelo = `${datosBusqueda.categoria} > ${datosBusqueda.modelo} ${datosBusqueda.anio} ${datosBusqueda.version}`
        $(".leyendaModelo").text(leyendaModelo)
    }

    function clickAgregarVehiculo() {
        $("#btnAgregarVehiculo").unbind('click').click(function () {
            let inputNumSerie = $("#modalAgregarNumSerie")
            if (vehiculosAgregados.indexOf(inputNumSerie.val()) < 0 && $.trim(inputNumSerie.val()) !== '') {
                vehiculosAgregados.push(inputNumSerie.val())
                let tdVehiculo = `
                    <tr data-numero-serie=${inputNumSerie.val()}>
                    <td>${inputNumSerie.val()}
                    <td>
                        <button type="button" data-numero-serie="${inputNumSerie.val()}" class="btn btn-light text-danger borrarVehiculo">
                            <span class="fa fa-trash"></span>
                        </button>
                    `
                $("#vehiculosAgregados tbody").append(tdVehiculo)
            }
            clickBorrarVehiculo()
        })
    }

    function clickBorrarVehiculo() {
        $(".borrarVehiculo").unbind("click").on("click", function () {
            let numeroSerie = $(this).attr("data-numero-serie")
            let index = vehiculosAgregados.indexOf(numeroSerie)
            vehiculosAgregados.splice(index, 1);
            $("#vehiculosAgregados tbody tr[data-numero-serie='" + numeroSerie + "']").remove()
        })
    }

    function clickAgregarStock() {
        $("#agregarVehiculosStock").unbind('click').click(function () {
            valoresActuales['idSucursal'] = $("#modalAgregarSucursal").val()
            valoresActuales['idColor'] = $("#modalAgregarColor").val()
            valoresActuales['estado'] = "Enviado"
            if (vehiculosAgregados.length > 0)
                _agregarStock()
        })
    }

    function _agregarStock() {
        if (vehiculosAgregados.length > 0) {
            valoresActuales['numeroSerie'] = vehiculosAgregados.pop()
            stockModel.add(valoresActuales)
            .then(respuesta => {
                _agregarStock()
            })
            .catch(error => {
                notificacionCentro({
                    type: 'warning',
                    title: 'Error al agregar vehículos',
                    text: 'Inténtelo de nuevo, por favor.'
                })
            })
        } else {
            $("#modalAgregar").find("tbody").html("");
            $("#modalAgregar .btn-danger").trigger('click');
            init();
            notificacionCentro({
                type: 'success',
                title: 'Vehículos agregados exitosamente',
            })
        }
    }

    function cargarTabla(vehiculosBusqueda) {
        if (myDataTable.isLoaded()) {
            myDataTable.actualizarTabla(vehiculosBusqueda)
        } else {
            datosTabla = {
                botonEliminarSelector: "",
                configuracionColumnasTabla: configuracionColumnasTabla,
                definicionColumnas: [configuracionBotonesEditarTabla],
                filas: vehiculosBusqueda,
                indexColumnasFiltro: [1, 2, 3],
                mainColumnIndex: 1,
                mainColumnOrder: "asc",
                tableID: "tablaStock"
            }
            myDataTable.init(datosTabla)
        }
        editarVehiculos()
    }

    function editarVehiculos() {
        $('table tbody').on('click', '.btnEditar', function () {
            let vehiculoCodificado = $(this).data('vehiculo');
            let _vehiculo = JSON.parse(decodeURIComponent(vehiculoCodificado));
            asociarInformacionAModalEditar(_vehiculo);
        });
    }

    function clickEditarVehiculo() {
        $('#btnModalEditar').on('click', function () {
            let formulario = $("#modalEditar form");
            let formularioValido = formulario.isValid();
            if (formularioValido) {
                let idVehiculo = $(this).attr("data-id-elemento")
                let parametros = $("#modalEditar form").serialize()
                _editarVehiculo(parametros, idVehiculo);
            } else {
                let inputsFormulario = formulario.find('.form-control');
                $.each(inputsFormulario, function(llave, input) {
                    validarInput(input);
                });
            }
        });
    }

    function _editarVehiculo(parametros, idVehiculo) {
        stockModel.update(parametros, idVehiculo)
        .then(respuesta => {
            $("#modalEditar").modal('hide');
            init();
            notificacionCentro({
                type: 'success',
                title: 'Vehículo modificado exitosamente',
            })
        })
        .catch(error => {
            notificacionCentro({
                type: 'warning',
                title: 'Error al modificar vehículos',
                text: 'Inténtelo de nuevo, por favor.'
            })
        })
    }

    return {
        init: init,
        cargarStock: cargarStockPorModelo
    }
}