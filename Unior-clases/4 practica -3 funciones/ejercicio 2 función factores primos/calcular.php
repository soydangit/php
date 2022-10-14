<!--Realizar una Funcion que me permita saber si el número introducido ennel formulario es par o impar-->
<?php
$a = $_POST['a'];
function parim($a)
{
    $x = 2;
    echo "el numero introducido es " . $a;
    echo "<br/> &nbsp; los factores primos son :";
    while ($a != 1) {
        if ($a % $x == 0) {
            echo "<br/> &nbsp; x : " . $x;
            $a = $a / $x;
        } else
            $x = $x + 1;
    }
}
parim($a);
echo "<br>";
parim($a);