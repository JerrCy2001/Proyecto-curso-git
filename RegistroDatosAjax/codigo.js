$('#Enviar').click(function(){

	$.post('conexion.php',
	{
		nombre:$('#nombre').val(),
		correo:$('#correo').val(),
		tel:$('#tel').val(),
		direccion:$('#direccion').val(),
	},
	function(info,estado){

		 div = document.getElementById('resultado');
            div.style.display = '';
		$('#resultado').html(info);

		});
});