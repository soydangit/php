<!--Realiza un programa que pida dos números y luego muestre  el resultado de su multiplicación.-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero multiplicado</title>
    </title>
</head>

<body>
    <?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    echo " la multiplicación de  " . $a . "  por  " . $b . "  es: " . $a * $b;
    ?>
</body>

</html>