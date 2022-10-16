$('#Enviar').click(function(){
	var nota1=$("#a").val();
    var nota2=$("#b").val();
    var nota3=$("#c").val();

	$.get('calcular.php',{n1:nota1,n2:nota2,n3:nota3},
	function(info,estado)
	{

		div = document.getElementById('resultado');
        div.style.display = '';
		$('#resultado').html(info);

	});
});