$("#Enviar").click(function () {
  $.post(
    "calcular.php",
    {
      no1: $("#n1").val(),
      no2: $("#n2").val(),
      no3: $("#n3").val(),
    },
    function (info, estado) {
      div = document.getElementById("resultado");
      div.style.display = "";
      $("#resultado").html(info);
    }
  );
});
