<!--realizar un script en PHP con los siguientes datos: para calcular el descuento 
de consumo eléctrico. Utilice sentencias condicionales (if,else,elseif)
1=100%
0.5=50%
0.4=40%
0.3=30%
0.2=20%
0.1=10%
0.05=5%
-->
<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
if (($c >= 1) && ($c <= 120)) {
    echo "<h1>Importe a cancelar sin descuento es: $c Bs.</h1>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL ESTADO PAGARA EL 100% DE SU FACTURA<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " SU DESCUENTO ES DE: " . $c * 1 . " Bs.<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL MONTO TOTAL A CANCELAR ES DE:" . $c - $c * 1 . " Bs.";
} elseif (($c >= 121) && ($c <= 300)) {
    echo "<h1>Importe a cancelar sin descuento es: $c Bs.</h1>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL ESTADO PAGARA EL 50% DE SU FACTURA<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " SU DESCUENTO ES DE: " . $c * 0.5 . " Bs.<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL MONTO TOTAL A CANCELAR ES DE:" . $c - $c * 0.5 . " Bs.";
} elseif (($c >= 301) && ($c <= 500)) {
    echo "<h1>Importe a cancelar sin descuento es: $c Bs.</h1>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL ESTADO PAGARA EL 40% DE SU FACTURA<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " SU DESCUENTO ES DE: " . $c * 0.4 . " Bs.<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL MONTO TOTAL A CANCELAR ES DE:" . $c - $c * 0.4 . " Bs.";
} elseif (($c >= 501) && ($c <= 1000)) {
    echo "<h1>Importe a cancelar sin descuento es: $c Bs.</h1>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL ESTADO PAGARA EL 30% DE SU FACTURA<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " SU DESCUENTO ES DE: " . $c * 0.3 . " Bs.<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL MONTO TOTAL A CANCELAR ES DE:" . $c - $c * 0.3 . " Bs.";
} elseif ($c > 1000) {
    echo "<h1>Importe a cancelar sin descuento es: $c Bs.</h1>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL ESTADO PAGARA EL 20% DE SU FACTURA<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " SU DESCUENTO ES DE: " . $c * 0.2 . " Bs.<br>";
    echo "Sr " . $a . " con el medidor #" . $b . " EL MONTO TOTAL A CANCELAR ES DE:" . $c - $c * 0.2 . " Bs.";
}