<!--Realiza un programa que diga si un numero introducido por teclado es par y/o divisible
entre 5-->
<?php
$a = 15;
//$a = $_GET['a'];
if (($a % 2) == 0) { {

        if (($a % 5) == 0) {
            echo "El numero ", $a, " es Par y es divisible entre 5";
        } else {
            echo "el numero ", $a, " es par pero no divisible entre 5";
        }
    }
} else {
    if (($a % 5) == 0) {
        echo "El numero ", $a, " es Impar y es divisible entre 5";
    } else {
        echo "El numero ", $a, " es Impar y NO es divisible entre 5";
    }
}
