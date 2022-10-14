/*Escribe un programa que muestre en tres columnas, 
  el cuadrado y el cubo de los 5 primeros números enteros 
  a partir de uno que se introduce por teclado utilice la 
  plantilla front end que se dio en clase para dar diseño.*/
$("#Enviar").click(function () {
  $.post(
    "calcular.php",
    {
      n1: $("#n1").val(),
    },
    function (info, estado) {
      div = document.getElementById("resultado");
      div.style.display = "";
      $("#resultado").html(info);
    }
  );
});
