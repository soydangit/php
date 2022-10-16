<!--Realizar un programa que calcule la media de tres notas.-->
<?php

$nu1 = $_GET['n1'];
$nu2 = $_GET['n2'];
$nu3 = $_GET['n3'];
$me=0;
$med=0;
$may=0;
if (($nu1<$nu2)&&($nu1<$nu3)){
    $me=$nu1;
    if($nu2<$nu3){
    $med=$nu2;
    $may=$nu3;
    }
    else{
    $med=$nu3;
    $may=$nu2;
    }

}
elseif (($nu2<$nu1)&&($nu2<$nu3)){
    $me=$nu2;
    if($nu1<$nu3){
    $med=$nu1;
    $may=$nu3;
    }
    else{
    $med=$nu3;
    $may=$nu1;
    }

}
elseif (($nu3<$nu1)&&($nu3<$nu2)){
    $me=$nu3;
    if($nu1<$nu2){
    $med=$nu1;
    $may=$nu2;
    }
    else{
    $med=$nu2;
    $may=$nu1;
    }

}


echo "el order es: ".$me.",".$med.",".$may;
echo "<center>El orden ascendente es:  $me , $med ,  $may</center>";
echo "<center><br>El orden descendente es:  $may , $med ,  $me</center>";
?>




<!--
echo str_repeat("&nbsp;",21)."DATOS RECIBIDOS";
echo "<br>la media de las 3 notas es: ".round((($calificacion1+$calificacion2+$calificacion3)/3),4) ." puntos";
//echo "<br /> &nbsp; El volumen del cilindro es de:". $volumen. "&nbsp m<sup>3</sup>";