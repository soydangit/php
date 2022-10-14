<!--Realizar un programa que calcule el salario semanal de un trabajador en base a las 
horas trabajadas se pagaran 12bs por hora.-->
<?php
$a = $_GET['a'];
$a = ($a * 12);
echo "Su salario semanal es: ", $a, " Bs";