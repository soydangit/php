<?php
$nu1=$_POST["n1"];

$t=sqrt($nu1*2/9.81);
echo str_repeat("&nbsp;",21)."DATOS RECIBIDOS";
echo "El tiempo de caida es =".round($t,4)."seg";
?>