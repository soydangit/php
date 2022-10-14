<!--Realizar un programa que nos diga cuátos digitos tiene un número entero que puede ser
positivo o negativo. Se permiten números de hasta 5 digitos-->
<?php
$numero = $_POST['numero'];
if ($numero < 0)
    $numero = ($numero * -1);
if (($numero) <= 9) {
    echo "el numero tiene un digito";
} elseif (($numero) <= 99) {
    echo "El numero tiene 2 digitos";
} elseif (($numero) <= 999) {
    echo "El numero tiene 3 digitos";
} elseif (($numero) <= 9999) {
    echo "El numero tiene 4 digitos";
} elseif (($numero) <= 99999) {
    echo "El numero tiene 5 digitos";
} else {
    echo "el numero EXCEDE los 5 digitos";
}