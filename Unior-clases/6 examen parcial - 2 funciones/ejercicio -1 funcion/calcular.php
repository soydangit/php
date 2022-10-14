<!--Realizar una función para calcular la siguiente serie introduciendo un valor n-->
<?php
$nu1 = $_POST['n1'];
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
/*
echo "<br>";
serie($nu1);
*/