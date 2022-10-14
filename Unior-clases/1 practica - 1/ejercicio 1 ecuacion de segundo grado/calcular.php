<!--Realizar un programa que nos permita resolver ecuaciones de segundo grado. 
Con las fórmula general de la ecuacion de segundo grado
ax^2+bx+c=0
x=(-b+-raiz(b^2-4ac))/2a

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if ($a == 0) {  //si a=0 el ejercicio pasa a ser bx+c=0
    $var0 = $c * -1;
    $varx = $var0 / $b;
    echo "el valor de x1 es: ", 0, "<br>";
    echo "el valor de x2 es: " . $varx;
} else {
$x1 = ((-1 * $b) + sqrt(($b * $b) - 4 * ($a) * ($c))) / (2 * $a);
$x2 = ((-1 * $b) - sqrt(($b * $b) - 4 * ($a) * ($c))) / (2 * $a);
echo "el valor de x1 es: ", $x1, " <br />";
echo "el valor de x2 es: ", $x2, " <br />";
}
-->
<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if ($a == 0) {  //si a=0 el ejercicio pasa a ser bx+c=0
    $var0 = $c * -1;
    $varx = $var0 / $b;
    echo "el valor de x1 es: ", 0, "<br>";
    echo "el valor de x2 es: " . $varx;
} else {
    $var1 = -1 * $b;    // multiplica b por -1
    $var2 = ($b * $b) - 4 * ($a) * ($c);  //b^2-4ac
    $var3 = 2 * $a;  //2a
    $raiz = sqrt($var2);   //sqrt //raiz(b^2-4ac)
    $var4 = $var1 + $raiz; // -b+raiz(b^2-4ac)
    $var5 = $var1 - $raiz; // -b-raiz(b^2-4ac)
    $x1 = $var4 / $var3; //(-b+raiz(b^2-4ac))/2a
    $x2 = $var5 / $var3; //(-b-raiz(b^2-4ac))/2a
    echo "el valor de x1 es: ", $x1, " <br />";
    echo "el valor de x2 es: ", $x2, " <br />";
}