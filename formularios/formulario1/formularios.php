


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>

        </style>
    </head>
    
    <body>
    <?php
 


    print_r($_SERVER)
    
    ?>
    <hr>
    <?php
    echo "<b>Navegador: </b>";
     print_r($_SERVER["HTTP_SEC_CH_UA"])

    ?>
    <hr>
    <?php
    echo "<b>Dirección IP: </b>";
    print_r($_SERVER["REMOTE_ADDR"])

    ?>
    <hr>
    <?php
    $cliente = explode(';',$_SERVER['HTTP_USER_AGENT'])[1];
    echo "<b>Sistema operativo : </b>";
    print_r($cliente)

    ?>
    <hr>
    <?php
    $lenguaje = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE'])[0];
    echo "<b>Lenguaje : </b>";
    print_r($lenguaje)

    ?>
    <hr>
        <form action="http://127.0.0.1:8080" method="get">
            Nombre: <input type="text" name="nombre"><br>
            Sexo:<br>
            <input type="radio" name="sexo" value="H">Hombre
            <input type="radio" name="sexo" value="M">Mujer 
            <input type="radio" name="sexo" value="O">Otros 
            <br>
            Color favorito: <input type="color" name="colorFavorito">
            <br>
            <textarea name="texto" id="" cols="30" rows="10"></textarea>
            <br><input type="button" value="Enviar">
        
        </form>
        
    </body>
</html>