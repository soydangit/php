<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
if ($a == 0) {  //si a=0 el ejercicio pasa a ser bx+c=0
    $var0 = -1 * $c;
    $varx = $var0 / $b;
    echo "el valor de x1 es: ", 0, "<br>";
    echo "el valor de x2 es: " . $varx;
} else {
    $x1 = ((-1 * $b) + sqrt(($b * $b) - 4 * ($a) * ($c))) / (2 * $a);
    $x2 = ((-1 * $b) - sqrt(($b * $b) - 4 * ($a) * ($c))) / (2 * $a);
    echo "el valor de x1 es: ", $x1, " <br />";
    echo "el valor de x2 es: ", $x2, " <br />";
}