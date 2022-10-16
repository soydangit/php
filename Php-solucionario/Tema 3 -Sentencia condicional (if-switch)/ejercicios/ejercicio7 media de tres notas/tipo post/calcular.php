<?php


$calificacion1=$_POST["nota1"];
$calificacion2=$_POST["nota2"];
$calificacion3=$_POST["nota3"];

if (($calificacion1<0||$calificacion2<0||$calificacion3<0)){
    echo "no se aceptan numeros negativos";
    }
    else{
    echo str_repeat("&nbsp;",21)."DATOS RECIBIDOS";
    echo "<br>la media de las 3 notas es: ".round((($calificacion1+$calificacion2+$calificacion3)/3),4) ." puntos";
    //echo "<br/> &nbsp; El volumen del cilindro es de:". $volumen. "&nbsp m<sup>3</sup>";
    }

?>