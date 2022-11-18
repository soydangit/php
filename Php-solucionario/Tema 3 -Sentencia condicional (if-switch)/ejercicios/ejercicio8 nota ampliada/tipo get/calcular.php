<!--Ampliar el programa anterior para que diga la nota del boletin (insufinciente, suficiente, bien, notable,
sobresaliente,excelente.
insuficiente->  nota<51
suficiente->  nota>=51 && nota<60
bien->      nota>=60 && nota<70
notable->   nota>=70 && nota<80
sobresaliente-> nota>=80 && nota<90
excelente->  nota>=90 && nota<=100
)-->
<?php

$nota1 = $_GET['no1'];
$nota2 = $_GET['no2'];
$nota3 = $_GET['no3'];

$nf = round((($nota1+$nota2+$nota3)/3),1);
echo " <center>DATOS RECIBIDOS </center>";
if ($nf<51){
    echo "Su nota es: ".$nf." </br>Nota insuficiente: REPROBADO";
}   elseif ($nf>=51 && $nf<=60) {
    echo "Su nota es: ".$nf." </br>Nota Suficiente: APROBADO";
}   elseif ($nf>=60 && $nf<=70) {
    echo "Su nota es: ".$nf." </br>Nota Buena: APROBADO";
}
    elseif ($nf>70 && $nf<=80) {
    echo "Su nota es: ".$nf." </br>Nota Notable: APROBADO";
}
    elseif ($nf>80 && $nf<=90) {
    echo "Su nota es: ".$nf." </br>Nota Sobresaliente: APROBADO";
}
    elseif ($nf>90 && $nf<=100) {
    echo "Su nota es: ".$nf." </br>Nota Excelente: APROBADO";
}



?>