<?php

$a = $_POST['a'];
$b = $_POST['b'];
if ($a == 0) {
    echo "a debe ser distinto de 0";
} else {
    $x = (($b * -1) / $a);
    echo "el valor de x es: " . $x;
}
