<?php

$num = $_GET['numero'];


$x = 2;
echo "<br/> &nbsp; los factores primos son :";
while ($num != 1) {
    if ($num % $x == 0) {
        echo "<br/> &nbsp; x : " . $x;
        $num = $num / $x;
    } else
        $x = $x + 1;
}