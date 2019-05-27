import * as common from './common.js';

export function cargarEventos()
{
	cargarTabla('eventos/cargarEventos');
}

export function cargarIngresos()
{
	cargarTabla('eventos/cargarIngresos');
}

export function cargarEgresos()
{
	cargarTabla('eventos/cargarEgresos');
}

function cargarTabla(url_)
{	
	$('#eventos-table').DataTable({
		'destroy':true,
		'paging': false,
		'searching':true,
		'info': false,

		'ajax':
		{
			url: common.ruta + url_,
			dataType: 'json',
			type: 'get'
		},

		'columns':
		[
			{'data':'tarjeta'},
			{'data':'dni'},
			{'data':'nombre'},
			{'data':'categoria'},
			{'data':'subcategoria'},
			{'data':'fecha'},
			{'data':'hora'},
			{'data':'evento'}
		]
	});

	$(".dataTables_filter").hide();
}

export function seleccionarTab()
{
	//Cuando se toca un tab (egreso, ingreso, egreso) se guarda en un input 
	//para su posterior uso (busqueda, filtro horario)

	$('#myTab li').on('click', function(){
		var tab = $('#tab-seleccionado').val($(this).find('a').attr('href').replace('#', '')).val();
		(tab == 'ingresos') ? cargarIngresos() : (tab == 'egresos') ? cargarEgresos() : cargarEventos();
	});
}

export function buscar()
{
	var busqueda = $('#busqueda').find('input').val()
	$('#eventos-table').DataTable().search(busqueda).draw();
}

export function reestablecerBusqueda()
{
	$('#busqueda #btn-reestablecer-busqueda').on('click', function(){
		$('#busqueda input').val('');
		buscar();
	});
}

export function reestrablecerHora()
{
	$('#filtro-hora #btn-reestablecer-hora').on('click', function(){
		var filtro = $('#filtro-hora input');

		limpiarInputs(filtro);

		$('#eventos-table').DataTable().draw();
	});
}

//Aca podria agregar mas filtros. Ver de agregar la busqueda
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
    	if(settings.nTable.id == 'eventos-table')
    	{
			var filtro = $('#filtro-hora').find('input');
			var hora_start = $(filtro[0]).val();
			var hora_end = $(filtro[1]).val();

	        var min = parseInt(hora_start, 10);
	        var max = parseInt(hora_end, 10);
	        var hora = parseInt(data[6].substr(0, data[6].length - 3));

	        //Verifica si es numero, y si cumple min y max
	        if ( ( isNaN( min ) && isNaN( max ) ) ||
	             ( isNaN( min ) && hora <= max ) ||
	             ( min <= hora   && isNaN( max ) ) ||
	             ( min <= hora   && hora <= max ) )
	        {
	            return true;
	        }
	        return false;
	    }
    }
);

