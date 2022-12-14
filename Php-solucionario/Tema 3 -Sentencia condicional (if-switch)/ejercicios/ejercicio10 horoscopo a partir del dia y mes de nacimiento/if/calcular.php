<!--Escribe un programa que nos diga el horóscopo a partir del dia y el mes de nacimiento-->
<?php
$dia=$_GET['a'];
$mes=$_GET['b'];
switch($mes){
    //enero
    case "1";
    if(($dia<1)||($dia>31)){ //Enero tiene maximo 31 dias
        echo "No es un día valido";
    }
    else{
    if($dia<=19){
        echo "Su fecha de nacimiento es el: ".$dia." de Enero<br>";
        echo "Su signo es Capricornio";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Enero<br>";
        echo "Su signo es Acuario";
    }
    }
    break;
    //febrero
    case "2";
    if(($dia<1)||($dia>29)){
        echo "No es un día valido";
    }
    else{
    if($dia<=18){
        echo "Su fecha de nacimiento es el: ".$dia." de Febrero<br>";
        echo "Su signo es Acuario";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Febrero<br>";
        echo "Su signo es Piscis";
    }
    }
    break;
    //marzo
    case "3";
    if(($dia<1)||($dia>31)){
        echo "No es un día valido";
    }
    else{
    if($dia<=20){
        echo "Su fecha de nacimiento es el: ".$dia." de Marzo<br>";
        echo "Su signo es Piscis";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Marzo<br>";
        echo "Su signo es Aries";
    }
    }
    break;
    //abril
    case "4";
    if(($dia<1)||($dia>30)){
        echo "No es un día valido";
    }
    else{
    if($dia<=19){
        echo "Su fecha de nacimiento es el: ".$dia." de Abril<br>";
        echo "Su signo es Aries";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Abril<br>";
        echo "Su signo es Tauro";
    }
    }
    break;
    //Mayo
    case "5";
    if(($dia<1)||($dia>31)){
        echo "No es un día valido";
    }
    else{
    if($dia<=20){
        echo "Su fecha de nacimiento es el: ".$dia." de Mayo<br>";
        echo "Su signo es Tauro";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Mayo<br>";
        echo "Su signo es Geminis";
    }
    }
    break;
    //junio
    case "6";
    if(($dia<1)||($dia>30)){
        echo "No es un día valido";
    }
    else{
    if($dia<=20){
        echo "Su fecha de nacimiento es el: ".$dia." de junio<br>";
        echo "Su signo es Geminis";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de junio<br>";
        echo "Su signo es Cancer";
    }
    }
    break;
    //Julio 
    case "7";
    if(($dia<1)||($dia>31)){
        echo "No es un día valido";
    }
    else{
    if($dia<=22){
        echo "Su fecha de nacimiento es el: ".$dia." de Julio<br>";
        echo "Su signo es Cancer";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Julio<br>";
        echo "Su signo es Leo";
    }
    }
    break;
    //Agosto
    case "8";
    if(($dia<1)||($dia>31)){
        echo "No es un día valido";
    }
    else{
    if($dia<=22){
        echo "Su fecha de nacimiento es el: ".$dia." de Agosto<br>";
        echo "Su signo es Leo";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Agosto<br>";
        echo "Su signo es Virgo";
    }
    }
    break;
    //Septiembre
    case "9";
    if(($dia<1)||($dia>30)){
        echo "No es un día valido";
    }
    else{
    if($dia<=22){
        echo "Su fecha de nacimiento es el: ".$dia." de Septiembre<br>";
        echo "Su signo es Virgo";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Septiembre<br>";
        echo "Su signo es Libra";
    }
    }
    break;
    //Octubre
    case "10";
    if(($dia<1)||($dia>31)){
        echo "No es un día valido";
    }
    else{
    if($dia<=22){
        echo "Su fecha de nacimiento es el: ".$dia." de Octubre<br>";
        echo "Su signo es Libra";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Octubre<br>";
        echo "Su signo es Escorpio";
    }
    }
    break;
    //noviembre
    case "11";
    if(($dia<1)||($dia>30)){
        echo "No es un día valido";
    }
    else{
    if($dia<=21){
        echo "Su fecha de nacimiento es el: ".$dia." de noviembre<br>";
        echo "Su signo es Escorpio";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de noviembre<br>";
        echo "Su signo es Sagitario";
    }
    }
    break;
    //Diciembre
    case "12";
    if(($dia<1)||($dia>31)){
        echo "No es un día valido";
    }
    else{
    if($dia<=21){
        echo "Su fecha de nacimiento es el: ".$dia." de Diciembre<br>";
        echo "Su signo es Sagitario";
    }
    else{
        echo "Su fecha de nacimiento es el: ".$dia." de Diciembre<br>";
        echo "Su signo es Capricornio";
    }
    }
    break;
    default:
    echo $mes." No es un Mes Correcto";
}
?>