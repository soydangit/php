<?php

$diametro = $_GET['dia'];

$altura = $_GET['alt'];

$radio = $diametro/2;

$Pi = 3.141593;

$volumen = $Pi*$radio*$radio*$altura;


echo "<br/> &nbsp; DATOS RECIBIDOS";
echo "<br/> &nbsp; Diametro establecido : ". $diametro. " metros";
echo "<br/> &nbsp; Altura establecida: ". $altura. " metros<br/>";
echo "<br/> &nbsp; El volumen del cilindro es de:". $volumen. "&nbsp m<sup>3</sup>";

?>