<!--floor() -  5.2 se convierte en 5 y 8.9 en 8.
ceil() -  5.2 se convierte en 6 y 8.9 en 9.
round() -  5.2 se convierte en 5 y 8.9 en 9.
-->
<!--Realizar un programa que nos diga cuátos digitos tiene un número entero que puede ser
positivo o negativo. Se permiten números de hasta 5 digitos-->
<?php
/*
$numero = $_POST['numero'];
$n = 0;
do {
    $numero = floor($numero / 10);
    $n = $n + 1;
} while ($numero > 0);
echo " Tu numero tiene " . $n . " digitos";
*/

$numero = $_POST['numero'];
if ($numero < 0) {
    $numero = $numero * -1;
}
if ($numero > 99999) {
    echo "el numero es mayor a 5 digitos";
} else {
    $contador = 0;
    while ($numero > 0) {
        $numero = floor($numero / 10);
        $contador++;
    }
    echo "el numero tiene " . $contador . " digitos";
}