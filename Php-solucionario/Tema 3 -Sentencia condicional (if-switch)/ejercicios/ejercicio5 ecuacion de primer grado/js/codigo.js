$('#Enviar').click(function(){
	var diametro=$("#di").val();
    var altura=$("#al").val();

	$.get('calcular.php',{dia:diametro,alt:altura},
	function(info,estado)
	{

		 div = document.getElementById('resultado');
         div.style.display = '';
		$('#resultado').html(info);

	});
});