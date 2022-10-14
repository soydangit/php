/*Escribir una función que descomponga y escriba los factores primos de
cualquier número Recuerda él envió de los datos tipo GET*/
$("#Enviar").click(function () {
  var diametro = $("#di").val();

  $.get("calcular.php", { dia: diametro }, function (info, estado) {
    div = document.getElementById("resultado");
    div.style.display = "";
    $("#resultado").html(info);
  });
});
