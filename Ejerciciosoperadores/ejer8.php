<?php
/*[25 min] Crea una función que genere un array asociativo que contenga información del tipo de los parámetros. 
La función irá descubriendo los tipos, comenzará con un array vacío. Cada vez que vea un tipo creará un clave con valor 1, 
si el tipo ya existía incrementará su valor en 1.
Funciones: gettype, array_key_exists o in_array o isset
$analisis = analizParámetros(3, "h", 'hola', [1,2,3], [1], "h");
print_r($analisis)
Imprime:

[
  'int' => 1,
  'string' => 3,
  'array' => 2
]*/
function analizParametros(mixed ...$parametros) {
    $array = [];

    foreach ($parametros as $parametro) {
        if (!array_key_exists(gettype($parametro), $array)) {
            $array[gettype($parametro)] = 1;
        } else {
            $array[gettype($parametro)]++;
        }
    }

    return $array;
}

$analisis = analizParametros(3, 4 , [1,2] , "h", 'hola', [1,2,3], [1], "h", 1.2);
print_r($analisis);


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