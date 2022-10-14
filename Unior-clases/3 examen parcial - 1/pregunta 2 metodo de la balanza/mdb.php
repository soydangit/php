<!--Realizar un programa que resuelva una ecuación de primer grado por el 
método de la balanza: -->
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo "<h2>Metodo de la banlaza </h2>";
echo $a . "x - (" . $b . ") = " . $c . "<br>";
echo $a . "x-(" . ($b . ")+" . - (-1 * $b)) . " = " . $c . "+(" . $b . ")<br>";
echo $a . "x - 0" . " = " . $c + $b . "<br>";
echo $a . "x/" . $a  . " = " . $c + $b . "/" . $a . "<br>";
$x = ($c + $b) / $a;
echo "x = " . $x;
echo "<h2>Comprobacion</h2>";
echo $a . "x - (" . $b . ") = " . $c . "<br>";
echo $a . "(" . $x . ") - " . "(" . $b . ") = " . $c . "<br>";
echo $a * $x . " - " . "(" . $b . ") = " . $c . "<br>";
echo $a * $x - $b . " = " . $c;