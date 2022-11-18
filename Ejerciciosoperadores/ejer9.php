<?php
/*Crea una función que reciba dos variables cualesquiera e intercambie su valor. 
Las variables tendrá ese valor fuera de la función. 
PRUEBA: Crea una web en la que se muestre cómo se comporta esta función con variables de distinto tipo.*/



$a = 5;
$b = 20;
function intercambiarValores(&$valor1, &$valor2) {
        $aux = $valor1;
        $valor1 = $valor2;
        $valor2 = $aux;
    }
print_r("El antiguo valor de a es: " . $a . "<br>");
print_r("El antiguo valor de b es: " . $b . "<br>");
intercambiarValores($a,$b);   
print_r("El nuevo valor de a es: " . $a . "<br>");
print_r("El nuevo valor de b es: " . $b . "<br>");
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