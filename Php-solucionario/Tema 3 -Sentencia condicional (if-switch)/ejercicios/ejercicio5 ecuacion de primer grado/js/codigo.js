//Realiza un programa que resuelva una ecuacion de primer grado del tipo (ax + b = 0)
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