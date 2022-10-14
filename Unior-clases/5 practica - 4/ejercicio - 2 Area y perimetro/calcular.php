<?php
$nu1 = $_POST['n1'];
$nu2 = $_POST['n2'];

$area = $nu1 * $nu2;
$perimetro = $nu1 + $nu2 + $nu1 + $nu2;

echo "&nbsp; DATOS RECIBIDOS <br>";
echo "El area del Rectangulo es: ", $area, " <br />";
echo "y su perimetro es: ", $perimetro, " <br />";