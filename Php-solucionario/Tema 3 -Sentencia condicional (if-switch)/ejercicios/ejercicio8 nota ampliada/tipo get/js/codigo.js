$("#Enviar").click(function () {
  var nota1 = $("#n1").val();
  var nota2 = $("#n2").val();
  var nota3 = $("#n3").val();

  $.get(
    "calcular.php",
    { no1: nota1, no2: nota2, no3: nota3 },
    function (info, estado) {
      div = document.getElementById("resultado");
      div.style.display = "";
      $("#resultado").html(info);
    }
  );
});
