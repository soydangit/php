<?php

//$nu1=5;
//$nu2=5;
//$nu3=5;
$nota1=$_POST["no1"];
$nota2=$_POST["no2"];
$nota3=$_POST["no3"];
$nf = round((($nota1+$nota2+$nota3)/3),1);
if(($nota1<0 || $nota1>100)||($nota2<0 || $nota2>100)||($nota3<0 || $nota3>100)){
    if($nota1<0){
    echo "Los primera nota no puede ser negativa<br>";
} elseif($nota1>100){
    echo "La primera nota  no puede ser mayor a 100<br>";
}
    if($nota2<0){
    echo "La segunda nota  no puede ser menor a 0<br>";
}
    elseif($nota2>100){
    echo "La segunda nota  no puede ser mayor a 100<br>";
}
    if($nota3<0){
    echo "La tercera nota  no puede ser menor a 0<br>";
}
    elseif($nota3>100){
    echo "La tercera nota  no puede ser mayor a 100";
    
}
}
else{
echo " <center>DATOS RECIBIDOS </center>";
if ($nf<51){
    echo "Su nota es: ".$nf." </br>Promedio insuficiente: REPROBADO";
}   elseif ($nf>=51 && $nf<=60) {
    echo "Su nota es: ".$nf." </br>Promedio  Suficiente: APROBADO";
}   elseif ($nf>=60 && $nf<=70) {
    echo "Su nota es: ".$nf." </br>Promedio  Bueno: APROBADO";
}
    elseif ($nf>70 && $nf<=80) {
    echo "Su nota es: ".$nf." </br>Promedio  Notable: APROBADO";
}
    elseif ($nf>80 && $nf<=90) {
    echo "Su nota es: ".$nf." </br>Promedio  Sobresaliente: APROBADO";
}
    elseif ($nf>90 && $nf<=100) {
    echo "Su nota es: ".$nf." </br>Promedio  Excelente: APROBADO";
}
}
?>