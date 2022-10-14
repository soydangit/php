<!-- Escribe un programa que utilice las variables $x y$y. Asignarles los valores 144 y 999 respectiva-
mente.A continuacion, muestra por pantalla el valor de cada variable, la suma, la resta , la división 
y la multiplicación.-->
<?php
$x = 144;
$y = 0;
$suma = $x + $y;
$resta = $x - $y;
$multi = $x * $y;
echo "***************************************<br>";
echo " \t Operaciones basicas<br>";
echo "   Suma, resta, Multiplicacion y division<br>";
echo "***************************************<br>";
echo $x . " + " . $y . " = " . $suma . "<br>";
echo $x . " - " . $y . " = " . $resta . "<br>";
echo $x . " * " . $y . " = " . $multi . "<br>"; {
    if ($y == 0) {
        echo  $x . " / " . $y . " = ";
        echo "no se puede realizar divisiones por 0 <br>";
    } else {
        $div = $x / $y;
        echo  $x . " / " . $y . " = " . $div . "<br>";
    }
}
echo "***************************************<br>";