<!--Ampliar el programa anterior para que diga la nota del boletin (insufinciente, suficiente, bien, notable
o sobresaliente
insuficiente->  nota<51
suficiente->  nota=51
bien->      nota>51 && nota<70
notable->   nota>70 && nota<90
sobresaliente-> nota>90 && nota<=100
)-->
<?php

$nota1 = $_GET['a'];
$nota2 = $_GET['b'];
$nota3 = $_GET['c'];

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