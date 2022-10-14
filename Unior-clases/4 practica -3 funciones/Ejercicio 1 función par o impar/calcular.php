<!--Realizar una Funcion que me permita saber si el número introducido ennel formulario es par o impar-->
<?php
$a = $_GET['a'];
function parim($a)
{
    if ($a % 2 == 0) {
        echo "el numero " . $a . " es par";
    } else {
        echo "el numero " . $a . " es impar";
    }
}
parim($a);
echo "<br>";
parim($a);