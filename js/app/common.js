export var ruta = 'http://localhost/admin-acceso/';

export function zerofill(n){
	if(n.value<10){
		n.value = "0" + n.value;
	}
	if(n.value==0){
		n.value = "00";
	}
}

export function limpiarInputs(inputs)
{
	inputs.each(function(){
		$(this).val('');
	});
}