import * as panel from './panel.js';
import {limpiarInputs} from './common.js';
import {ruta} from './common.js';

var peticion = true;

$(document).ready(function(){
	//--Funciones en comun---

	panel.cargarEventos();
	panel.seleccionarTab();
	panel.reestablecerBusqueda();
	panel.reestrablecerHora();

	//Funcion busqueda en vivo
	live_cargarPersonaDni();

	$('#busqueda #btn-buscar').on('click', function(){
		panel.buscar();
	});

	//Vuelve a dibujar la tabla aplicando los filtros
	$('#filtro-hora #btn-hora-buscar').on('click', function(){
		$('#eventos-table').DataTable().draw();
	});

	//Limpia el icono cuando se limpian los inputs
	$('#form-asignar-tarjeta button[type="reset"]').on('click', function()
	{
		$('#form-asignar-tarjeta .loading').children().remove();
	});

	//---Funciones admin------

	//-----USUARIOS------//
	$('#form-agregar-usuario').on('submit', function(e){
		e.preventDefault();

		//datos del formulario pasados a JSON
		var data = $(this).serialize(); 
		//lugar donde se va a mostrar el mensaje
		var content_msg = $(this).find('.modal-footer #msg-user');
		//Color por defecto rojo
		content_msg.css('color', 'red');
		
		$.ajax({
			url: ruta  + 'Usuarios/agregar',
			type: 'POST',
			dataType: 'json',
			data: data,

			success: function(r)
			{
				if(r.success == true)
				{
					content_msg.html(r.msg);
					content_msg.css('color', 'green');
					
					setTimeout(function(){
						limpiarInputs($('#form-agregar-usuario input'));
						$('#inputGroupSelect01').val('defecto');
						content_msg.html('');
					}, 1000);

				}else if(r.success == false)
				{
					content_msg.html(r.msg);
				}
			},

			error: function(r)
			{
				console.log('ocurrio un error');
			}
		})
	});

	//----TARJETAS---//
	$('#form-asignar-tarjeta').on('submit', function(e){
		e.preventDefault();
		var content_msg = $(this).find('.modal-footer #msg-tarjeta');
		var data =  $(this).serialize(); 

		$.ajax({
			url: ruta + 'Tarjetas/asignar',
			type: 'POST',
			data: data,
			dataType: 'json',

			success: function(r)
			{	
				content_msg.html(r.msg);
				
				if(r.success)
				{	
					content_msg.css('color', 'green');
					setTimeout(function(){
						limpiarInputs($('#form-asignar-tarjeta input'));
						$('#select-area').val('default');
						$('#form-asignar-tarjeta .loading i').remove();
						content_msg.html('');
					}, 1000)
				}else
				{
					content_msg.css('color', 'red');
				}
			},

			error: function(e)
			{
				console.log('error');
			}
		});
	});

});



//Busqueda por dni (Formulario Tarjetas --> Asignar)
function live_cargarPersonaDni()
{
	$('#form-asignar-tarjeta input[name="dni"]').on('keyup', function(){
		//Se obtinen los inputs nombre y apellido mediante la clase "display required" 
		//para mostrar los datos
		var inputs = $('#form-asignar-tarjeta .display_required');
		//Contenedor para los iconos
		var loading = $('#form-asignar-tarjeta .loading');

		//Cuando lo longitud sea 8, va a buscar a la bd
		if($(this).val().length <= 8 && $(this).val().length >= 7)
		{
			$.ajax({
				url: ruta + 'Personas/personaPorDni',
				type: 'POST',
				dataType:'json',
				data: {'dni': $(this).val()},

				beforeSend: function()
				{	
					//Si hay iconos se remueven
					if($(loading).find('i').length > 0)
					{
						loading.find('i').remove();	
					}

					if(loading.find('img').length == 0)
					{
						$(loading).append('<img class="load" src=' + ruta + 'images/load.gif>');
					}
				},

				complete: function()
				{
					//Una vez completada la peticion, se quita el gif de busqueda
					$(loading).find('img').remove();
				},

				success:function(r)
				{	
					if($(loading).find('i').length > 0)
					{
						$(loading).find('i').remove();	
					}

					if(r != null)
					{ 	
						//Carga nombre y apellido y deshabilita los inputs
						$(inputs[0]).val(r.nombre);
						$(inputs[0]).prop('disabled', true);
						$(inputs[1]).val(r.apellido);
						$(inputs[1]).prop('disabled', true);

						//Se agrega icono OK
						//$(loading).append('<i class="fas fa-check-circle fa-2x text-success"></i>');
					}else
					{	
						//Se limpian inputs
						limpiarInputs($(inputs));
						$(inputs[0]).prop('disabled', false);
						$(inputs[1]).prop('disabled', false);
							
						//Icono no encontrado
						//$(loading).append('<i class="fas fa-times fa-2x"></i>')
					}
				},
				
				error:function(e)
				{
					console.log('Ocurrio un error');
				}

			})
		}else
		{	
			//Se limpia y se quitan todos los iconos que quedan de busqueda anterior, 
			//ya que no cumple con la logitud 8
			limpiarInputs($(inputs));
			$(loading).find('i').remove();
			$(loading).find('img').remove();
			$(inputs[0]).prop('disabled', false);
			$(inputs[1]).prop('disabled', false);
		}
		
	});
}