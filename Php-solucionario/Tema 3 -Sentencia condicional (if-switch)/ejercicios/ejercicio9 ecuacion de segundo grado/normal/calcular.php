<!--Realiza un programa qye resuleva una ecuacion de segundo grado 
del tipo ax²+bx+c=0-->
<?php
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];

$dis=(sqrt(($b*$b)-(4*$a*$c)));

if ($a==0){ //No existen divisiones entre 0
    echo "El valor de a debe ser distinto de cero";
}
else{
if($dis>0){
    echo "existen 2 soluciones reales y distintas<br>";
    $x1=((($b*-1)+($dis))/(2*$a));
    $x2=((($b*-1)-($dis))/(2*$a));
    echo "El valor de x1=".round($x1,2)."</br>";
    echo "El valor de x2=".round($x2,2);
}
if($dis==0){
    echo "Existe una unica solucion</br>";
    $x1=((($b*-1)+($dis))/(2*$a));
    echo "El valor de x=".round($x1,2)."</br>";
}
if((($b*$b)-(4*$a*$c))<0){//No existen raices negativas
    echo "Existen 2 soluciones complejas distintas NO puedo continuar";
}
}
/* Dada una ecuación de segundo grado en su forma general,
ax²+bx+c=0, a≠0
Se define su discriminante como
Δ=b²−4⋅a⋅c

El discriminante informa sobre el número y tipo de soluciones:

    Si Δ>0, existen dos soluciones reales y distintas.

    Si Δ=0, existe una única solución y es real.

    Si Δ<0 o (b²−4⋅a⋅c)<0, existen dos soluciones complejas distintas 
    (las soluciones son números complejos conjugados).

No obstante, si el coeficiente b o el coeficiente c es 0, la ecuación es incompleta y podemos calcular sus soluciones sin aplicar la fórmula anterior:

    Si b=0 y c≠0 (ecuación ax²+c=0), las soluciones son: x=±√−c/a.

    Si b≠0 y c=0 (ecuación ax²+bx=0), una solución es: x1=0 y la otra es x2=−b/a.

    Si b=c=0 (ecuación ax²=0), la única solución es x=0. */ 
?>