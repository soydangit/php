<!--Escribir una función que descomponga y escriba los factores primos de
cualquier número Recuerda él envió de los datos tipo GET-->
<?php

$diametro = $_GET['dia'];

function primos($diametro)

{
    $x = 2;
    echo "el numero introducido es " . $diametro;
    echo "<br/> &nbsp; los factores primos son :";
    while ($diametro != 1) {
        if ($diametro % $x == 0) {
            echo "<br/> &nbsp; x : " . $x;
            $diametro = $diametro / $x;
        } else
            $x = $x + 1;
    }
}
primos($diametro);
/*
echo "<br>";
primos($diametro);
*/