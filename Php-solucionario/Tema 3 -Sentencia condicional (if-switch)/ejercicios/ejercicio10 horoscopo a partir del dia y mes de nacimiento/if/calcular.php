<!--Escribe un programa que nos diga el horóscopo a partir del dia y el mes de nacimiento-->
<?php
$dia=$_POST['a'];
$mes=$_POST['b'];
if(($mes<1)||($mes>12)){
    echo $mes." No es un mes valido";
}
else{
//enero
if($mes==1){
    $mes="Enero";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=20){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Acuario";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Capricornio";
    }
}
//febrero
if($mes==2){
        $mes="Febrero";
    if(($dia<1)||($dia>29)){
        echo $mes." solo tiene 28 días y 29 en año bisiesto<br>";
    }
    elseif($dia>=19){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Piscis";
    }
    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Acuario";
    }
}
//marzo
if($mes==3){
    $mes="Marzo";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=21){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Aries";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Piscis";
    }
}
//Abril
if($mes==4){
        $mes="Abril";
    if(($dia<1)||($dia>30)){
        echo $mes." solo tiene 30 días<br>";
    }
    elseif($dia>=20){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Tauro";
    }
    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Aries";
    }
}
//Mayo
if($mes==5){
    $mes="Mayo";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=21){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Geminis";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Tauro";
    }
}
//Junio
if($mes==6){
    $mes="Junio";
    if(($dia<1)||($dia>30)){
        echo $mes." solo tiene 30 días<br>";
    }
    elseif($dia>=21){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Cancer";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Geminis";
    }
}
//Julio
if($mes==7){
    $mes="Julio";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=23){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Leo";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Cancer";
    }
}
//Agosto
if($mes==8){
    $mes="Agosto";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=23){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Virgo";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Leo";
    }
}
//Septiembre
if($mes==9){
    $mes="Septiembre";
    if(($dia<1)||($dia>30)){
        echo $mes." solo tiene 30 días<br>";
    }
    elseif($dia>=23){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Libra ";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Virgo";
    }
}
//octubre
if($mes==10){
    $mes="Octubre";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=23){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Escorpio";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Virgo";
    }
}
//Noviembre
if($mes==11){
    $mes="Noviembre";
    if(($dia<1)||($dia>30)){
        echo $mes." solo tiene 30 días<br>";
    }
    elseif($dia>=22){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Sagitario";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Escorpio";
    }
}
// Diciembre
if($mes==12){
    $mes="Diciembre";
    if(($dia<1)||($dia>31)){
        echo $mes." solo tiene 31 días<br>";
    }
    elseif($dia>=23){
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Capricornio";
    }

    else{
    echo "Su fecha de nacimiento es ".$dia." de ".$mes."<br>";
    echo "Su signo es: Sagitario";
    }
}
}
?>