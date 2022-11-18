<!--Realizar un programa que calcule la media de tres notas.-->
<?php
$nu1=$_POST["nota1"];
$nu2=$_POST["nota2"];
$nu3=$_POST["nota3"];

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


echo "<center>DATOS RECIBIDOS</center>";
echo "<center>El orden correcto es:  $me , $med , $may</center>";

?>