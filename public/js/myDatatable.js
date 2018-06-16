var myDataTable = (function() {
    var configuracionLeyendasTabla = {
        lengthMenu: "Mostrar _MENU_ resultados",
        search: "Buscar:",
        zeroRecords: "Lo sentimos, no se encontraron resultados",
        info: "Mostrando página _PAGE_ de _PAGES_",
        infoEmpty: "No hay resultados disponibles",
        infoFiltered: "(filtrado de un total de _MAX_ elementos)",
        paginate: {
            first:    'Primera',
            previous: '« Anterior',
            next:     'Siguiente »',
            last:     'Última'
        }
    }
    var dataTable = null;
    var data = null;
    var elementosSeleccionados = {};

    function init(datosConstructores) {
        data = datosConstructores;
        cargarTabla();
        clickCheckboxTabla();
        clickSeleccionarTodo();
    }

    function cargarTabla() {
        dataTable = $('#' + data.tableID).DataTable({
            columns: data.configuracionColumnasTabla,
            columnDefs: data.definicionColumnas,
            data: data.filas,
            initComplete: function(settings) {
                this.api().columns(data.indexColumnasFiltro).every(function(a, b, c) {
                    cargarFiltros(this);
                } );
                actualizarSeleccionElementosTabla(settings.oInstance.api())
            },
            language: configuracionLeyendasTabla,
            order: [[data.mainColumnIndex, data.mainColumnOrder]],
            responsive: true,
            rowCallback: function(fila, dato, dataIndex) {
                marcarFilaSeleccionada(fila, dato);
            }
        });
    }

    function cargarFiltros(column) {
        var columnName = column.header().innerText;
        var divDropdown = $(`<div class="btn-group">
                            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">` + columnName + `<span class="caret"></span></a>
                            </div>`)
        var ul = $(`<ul class="dropdown-menu"><li class="dropdown-item px-2">Sin filtro</li></ul>`)
        var label = $('<label class="my-1 mr-2">'+ columnName +'</label>');
        divDropdown.on('click', ".dropdown-menu li", function(){
            var selText = $(this).text();
            let valorFiltro = (selText == "Sin filtro") ? '' : selText;
            let tituloFiltro = (selText == "Sin filtro") ? columnName : selText;
            $(this).parents('.btn-group').find('.dropdown-toggle').html(tituloFiltro + ' <span class="caret"></span>');
            var val = $.fn.dataTable.util.escapeRegex(valorFiltro);
            column.search( val ? '^'+val+'$' : '', true, false).draw();
        });
        column.data().unique().sort().each(function (d, j) {
            let li = $('<li class="dropdown-item px-2">' + d + '</li>')
            let a = '<a href="#"></a>'
            li.appendTo(ul)
        });
        ul.appendTo(divDropdown)
        divDropdown.appendTo($("#filtrosTabla"));
    }

    function marcarFilaSeleccionada(fila, dato) {
        if (dato.activo && dato.activo === '0') {
            $(fila).addClass('filaInactiva').find('input[type="checkbox"]').prop('disabled', true);
        }
        var idFila = dato._id;
        // Si idFila se encuentra en elementosSeleccionados
        if (elementosSeleccionados[idFila]) {
            $(fila).find('input[type="checkbox"]').prop('checked', true);
            $(fila).addClass('selected');
        }
    }

    function actualizarSeleccionElementosTabla(_dataTable = dataTable){
        let $dataTable         = _dataTable.table().node();
        let $chkbox_all        = $('tbody input[type="checkbox"]', $dataTable);
        let $chkbox_checked    = $('tbody input[type="checkbox"]:checked', $dataTable);
        let chkbox_select_all  = $('thead input[name="select_all"]', $dataTable).get(0);
        habilitarElemento(data.botonEliminarSelector, true);
        // Si ningún de los checkboxes está seleccionado
        if($chkbox_checked.length === 0){
            desmarcarCheckboxesTabla(_dataTable);
         // Si todos los checkboxes están seleccionados 
        } else if ($chkbox_checked.length === $chkbox_all.length){
            chkbox_select_all.checked = true;
            if('indeterminate' in chkbox_select_all){
               chkbox_select_all.indeterminate = false;
            }
         // Si algunos de los checkboxes están seleccionados
        } else {
            chkbox_select_all.checked = true;
            if('indeterminate' in chkbox_select_all){
               chkbox_select_all.indeterminate = true;
            }
        } 
    }

    function desmarcarCheckboxesTabla(_dataTable = dataTable) {
        let $dataTable         = _dataTable.table().node();
        let chkbox_select_all  = $('thead input[name="select_all"]', $dataTable).get(0);
        chkbox_select_all.checked = false;
        if('indeterminate' in chkbox_select_all){
            chkbox_select_all.indeterminate = false;
        }
        elementosSeleccionados = {};
        habilitarElemento(data.botonEliminarSelector, false);
    }

    function clickCheckboxTabla() {
        // $('#' + data.tableID + ' tbody input[type="checkbox"]')
        $('#' + data.tableID + ' tbody').on('click', 'input[type="checkbox"]', function(e) {
            var $fila = $(this).closest('tr');
            // Obtener datos de fila
            var datosFila = dataTable.row($fila).data();
            // Obtener id de fila
            var idFila = datosFila._id;
            // Si checkbox está seleccionado y idFila no está en elementosSeleccionados
            if(this.checked && !elementosSeleccionados[idFila]){
                elementosSeleccionados[idFila] = datosFila;
            // Si checkbox no está seleccionado y idFila está en elementosSeleccionados
            } else if (!this.checked && elementosSeleccionados[idFila]){
                delete(elementosSeleccionados[idFila])
            }
            if (this.checked) {
                $fila.addClass('selected');
            } else {
                $fila.removeClass('selected');
            }
            actualizarSeleccionElementosTabla(dataTable);
            e.stopPropagation();
        });
    }

    function clickSeleccionarTodo() {
        $('thead input[name="select_all"]', dataTable.table().container()).on('click', function(e){
            if(this.checked) {
                $('#' + data.tableID + ' tbody input[type="checkbox"]:not(:checked)').trigger('click');
            } else {
                $('#' + data.tableID + ' tbody input[type="checkbox"]:checked').trigger('click');
            }
            e.stopPropagation();
        });
    }

    function actualizarTabla(filas) {
        dataTable.clear();
        dataTable.rows.add(filas);
        dataTable.draw();
    }

    function isLoaded() {
        return (dataTable) ? true : false
    }

    function getElementosSeleccionados() {
        return elementosSeleccionados
    }

    return {
        init: init,
        actualizarTabla: actualizarTabla,
        isLoaded: isLoaded,
        seleccion: getElementosSeleccionados,
        desmarcarSeleccion: desmarcarCheckboxesTabla
    }
}());