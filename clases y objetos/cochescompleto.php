<!--Codigo PHP-->
<?php
require ('clases/CocheGrua.php');
$coche2 = new Coche();
$coche2->setMatricula("4589CLD");
$coche2->setMarca("Audi");
$coche2->setCarga(300);


$coche = new CocheGrua();
$coche->setMatricula("4589CLD");
$coche->setMarca("Audi");
$coche->setCarga(300);
//$coche->setCapacidad(500);
$coche->cargar($coche2);
echo $coche->pintarInformacion();
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