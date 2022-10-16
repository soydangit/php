$('#Enviar').click(function(){

	$.post('calcular.php',
	{
		nota1:$('#a').val(),
		nota2:$('#b').val(),
		nota3:$('#c').val(),
	},
	function(info,estado)
	{

		div = document.getElementById('resultado');
        div.style.display = '';
		$('#resultado').html(info);

	});
});