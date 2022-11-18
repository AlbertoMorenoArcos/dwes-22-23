<?php
/*
Crea una función que genera un array aleatorio con parámetros variables

Por defecto generará 10 valores entre 0 y 10
Puedes especificar el número de valores como primer parámetro,
Puedes especificar el valor máximo como segundo parámetro
o Puedes especificar número de valores, máximo y mínimo
aleatorio(); // [n,n,n,n,n,n,n,n,n,n]
aleatorio(5) // [n,n,n,n,n]
aleatorio(5,50)
aleatorio(5,50,-50)
*/

function aleatorio($nValores = 10,$valorMaximo = 10,$valorMinimo = 0): array {
    $array = [];

    for ($i = 0; $i < $nValores; $i++) { 
        $array[$i] = mt_rand($valorMinimo, $valorMaximo);
    }

    return $array;
}

$arrayAleatorio1 = aleatorio();
$arrayAleatorio2 = aleatorio(5);
$arrayAleatorio3 = aleatorio(5, 50);
$arrayAleatorio4 = aleatorio(5, 50, -50);
print_r($arrayAleatorio1);
print_r($arrayAleatorio2);
print_r($arrayAleatorio3);
print_r($arrayAleatorio4);




?>
<!--Codigo PHP-->

<!--Codigo HTML-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>

        </style>
    </head>
    
    <body>

    </body>
</html>