$('#Enviar').click(function(){

	$.post('calcular.php',
	{
		n1:$('#h').val(),
		n2:$('#n2').val(),
		n3:$('#n3').val(),
	},
	function(info,estado)
	{

		div = document.getElementById('resultado');
        div.style.display = '';
		$('#resultado').html(info);

	});
});