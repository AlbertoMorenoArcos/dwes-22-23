<!--Codigo PHP-->
<?php
/*Dados estos arrays consigue que el resultado sea rojo, verde, naranja, azul usando la funcion array_merge*/
$a1=array("a"=>"rojo");
$a2=array("b"=>"añil", "c"=>"violeta");
$a3=array("d"=>"verde", "f"=>"naranja");
$a4=array("i"=>"azul");
$a5=array("g"=>"azul", "h"=>"blanco");

$arraymergeado = array_merge($a1,$a3,$a4);
print_r($arraymergeado);
?>
<!--Codigo PHP-->

<!--Codigo HTML-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays</title>
        <style>

        </style>
    </head>
    
    <body>

    </body>
</html>