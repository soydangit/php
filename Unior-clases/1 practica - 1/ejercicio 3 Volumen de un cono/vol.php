<!--Escribe un programa que calcule el volumen de un cono mediante la fórmula
V=(1/3)*pi*r^2*h-->
<?php
$radio = $_GET['r'];
$altura = $_GET['h'];
$volumen = (M_PI * $radio * $radio * $altura) / 3; //M_PI=3.1415926564
echo "El volumen del cono es: ", $volumen, "cm²"; //alt+253  simbolo de al  cuadrado ²