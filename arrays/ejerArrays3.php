<!--Codigo PHP-->
<?php
/*Utiliza la función print_r() para ver la evolución de cada array.
Funciones: array_walk, array_map, array_replace
Extra: https://www.php.net/manual/es/function.password-hash.php
$usuarios = [
	"jorge" => "1234",
	"amparo" => "admin",
	"mary" = > "",
]
Enunciado: Crea una array bidimesional que guarda nombre de usuario y contraseña de usuario en texto claro. array_walk ejecuta una funcion 
predefinida mostrando nombre de usuario y contraseña
Enunciado: Utilizando las funciones de contraseñas y la función array_map. Genera un array nuevo con los usuarios y su contraseña en formato hash.
Enunciado: En base al ejercicio anterior cambia la función para que los usuarios sin contraseña tenga la contraseña "tmp2022"
Enunciado: Haz un filtrado de usuarios sin contraseña, utiliza array_replace para establecer en el array original $usuarios
la contraseña de los usuarios que no tenían.
*/

$usuarios = [
	"jorge" => "1234",
	"amparo" => "admin",
	"mary" => ""
];
function imprimirArray($contraseña, $clave){
    echo 'Nombre: ' . $clave . ' - Contraseña:' . $contraseña .'</br>';
    
}
array_walk($usuarios, 'imprimirArray');


function contraseñaHash($contraseña){

    return password_hash($contraseña, PASSWORD_DEFAULT)."</br>";
}

$contraseñasConHash = array_map('contraseñaHash',$usuarios);
print_r($contraseñasConHash);

function contraseñaHash2($contraseña){
    if ($contraseña = ""){
        $contraseña = "tmp2022";
    } else{
    $contraseña = $contraseña;
    }
    
    return password_hash($contraseña, PASSWORD_DEFAULT)."</br>";
}

function replace($contraseña, $clave){
    if ($contraseña = ""){
        $contraseña = "tmp2022";
    } else{
    $contraseña = $contraseña;
    }
    echo ('Nombre: '.$clave.' - Contraseña: '.$contraseña.'</br>');
}


array_walk($usuarios,function($contraseña,$clave){
    $contraseña = ($contraseña == "") ? $contraseña = "tmp2022" : $contraseña;
    echo ('Nombre: '.$clave.' - Contraseña: '.$contraseña.'</br>');
})
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