<!--Codigo PHP-->
<?php
/*
Utiliza alguna de las funciones para generar un array de cadenas indicando el nombre de la persona 
y cómo tratarle con formalidad. Si el valor entero detrás del nombre es un 1 Hay que poner "Señor <nombre>", 
si es 0 hay que poner "Señora <nombre>"
$resultado = ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];
*/


$personas = [
        ["Jorge", 1],
        ["Bea", 0],
        ["Paco", 1],
        ["Amparo", 0],
    ];

    function formal($genero){
  /*array_walk(($num, function($valor){echo ((valor<10)? 'mayor': 'menor')}));  */   
            if ($personas[1] == 1){
                $genero=true;
            } else{
                $genero=false;
            }

            return (($personas[1] == 1) ? "Señor" : "Señora");
         }

$genero = array_map('formal' , $personas);
print_r ($genero);
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