<?php
// b=2  c=100 -->2255
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$comision = 2050 + 100 * $b + 100 * 0.05;
echo "El nombre del vendedor es: " . $a . "<br>";
echo "La cantidad de computadoras vendidas es: " . $b . "<br>";
echo "El precio total de computadoras vendidas es: " . $c . "<br>";
echo "El salario del vendedor es: " . $comision;