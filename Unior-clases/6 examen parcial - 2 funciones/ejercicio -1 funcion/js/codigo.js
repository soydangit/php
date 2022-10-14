/*Realizar una función para calcular la siguiente serie introduciendo un valor n*/
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
