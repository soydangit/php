$("#Enviar").click(function () {
  $.post(
    "calcular.php",
    {
      a: $("#a").val(),
      b: $("#b").val(),
      c: $("#c").val(),
    },
    function (info, estado) {
      div = document.getElementById("resultado");
      div.style.display = "";
      $("#resultado").html(info);
    }
  );
});
