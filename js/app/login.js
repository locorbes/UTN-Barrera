import {ruta} from './common.js';

$(document).ready(function(){
	login();
});

function login()
{	
	$('#ingresar').on('click', function(e){
		e.preventDefault();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: ruta + 'panel/login',
				data: $('#form-login').serialize(),
				
				success:function(data)
				{	
					var msg = $('#msg');
					
					msg.text(data.message);	

					var color = (data.success) ? 'green' : 'red';
					msg.css('color', color); 

					if(data.success)
					{
						location.href = ruta + 'panel/' + data.tipo;
					}
				},

				error: function(error)
				{
					console.log(error);
				}

			});
	});
}

