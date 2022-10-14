<!--Realizar un programa que permita calcular el interés compuesto:
Cf=Ci(1+i)^n
Ic=Cf-Ci-->

<?php
$a = $_GET['a']; //capital depositado
$b = $_GET['b']; //tasa de interes
$c = $_GET['c']; // valor de tiempo
$p = 1 + ($b / 100);    // convercion de porcentaje
//$q = pow($p, 5);
$Vm = $a * pow($p, $c); // Vm => Cf=Ci(1+i)^n    valor del monto
$Vic = $Vm - $a;  //Valor del Inters Vompuesto (Vic)    Ic=Cf-Ci
echo "<br>Valor del capital depositado: " . $a . "Bs.<br><br>";
echo "Valor del inters compuesto: " . $Vic . "Bs.<br><br>";
echo "Valor del monto: " . $Vm . "Bs.";



/*
----------------------------------------
Cf=final en el año "n"  (?)
Ci= Capital Depositado (capital inicial)  (500)
i=tipo de interes anual compuesto (6%)=(0.06)
n= # de años  (5)
--------------------------------------
Cf =   Ci     (1+i)    ^n
Cn =   500*   (1+0.06)   ^5
669.1127888
----------------------------------------
Ic   =   Cf          -     Ci
Ic   =  669.1127888  -    500
Ic   = 169.11 
*/