<!--Realizar un programa que nos diga cuátos digitos tiene un número entero que puede ser
positivo o negativo. Se permiten números de hasta 5 digitos-->
<?php
$numero = $_GET['numero'];
if ($numero < 0) {
    $numero = $numero * -1;
}
if ($numero > 99999) {
    echo "el numero es mayor a 5 digitos";
} else {
    $numero = strlen($numero);
    echo "Cantidad de Digitos es: ", $numero;
}