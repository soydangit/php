<!--Realizar un programa que calcule el tiempo que tardará em caer un objeto desde una alturah.
Aplica la fórmula t = raiz(2h/g) siendo  g= 9.81 m/s²-->
<?php

$diametro = $_GET['dia'];
$t=sqrt($diametro*2/9.81);
echo str_repeat("&nbsp;",21)."DATOS RECIBIDOS";
echo "El tiempo de caida es =".round($t,4)."seg";

//echo "<br/> &nbsp; El volumen del cilindro es de:". $volumen. "&nbsp m<sup>3</sup>";

?>