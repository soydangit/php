<!--Escribe un programa que muestre en tres columnas, 
  el cuadrado y el cubo de los 5 primeros números enteros 
  a partir de uno que se introduce por teclado utilice la 
  plantilla front end que se dio en clase para dar diseño.-->
<?php
$nu1 = $_POST['n1'];
function cuacu($nu1)
{


    echo "n" . str_repeat("&nbsp;", 12), "n²" . str_repeat("&nbsp;", 12), "n³" . "<br>";
    echo $nu1 . str_repeat("&nbsp;", 12), pow($nu1, 2) . str_repeat("&nbsp;", 12), pow($nu1, 3) . "<br>";
    echo $nu1 + 1 . str_repeat("&nbsp;", 12), pow($nu1 + 1, 2) . str_repeat("&nbsp;", 12), pow($nu1 + 1, 3) . "<br>";
    echo $nu1 + 2 . str_repeat("&nbsp;", 12), pow($nu1 + 2, 2) . str_repeat("&nbsp;", 12), pow($nu1 + 2, 3) . "<br>";
    echo $nu1 + 3 . str_repeat("&nbsp;", 12), pow($nu1 + 3, 2) . str_repeat("&nbsp;", 12), pow($nu1 + 3, 3) . "<br>";
    echo $nu1 + 4 . str_repeat("&nbsp;", 12), pow($nu1 + 4, 2) . str_repeat("&nbsp;", 12), pow($nu1 + 4, 3) . "<br>";
};
cuacu($nu1);
cuacu($nu1);


















/*
function serie($nu1)
{
    $i = 0;
    $cont = 1;
    while ($i++ < $nu1) {
        $cont = 1;
        while ($cont++ <= $i)
            echo $i . ",";
    }
}
serie($nu1);
*/
/*
echo "<br>";
serie($nu1);
*/