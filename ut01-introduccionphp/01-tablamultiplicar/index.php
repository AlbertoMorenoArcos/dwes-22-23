<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de multiplicar PHP</title>
    </head>
    <body>
        <!-- Creamos las variables num y hasta -->
        <?php
        $num=5;
        $hasta=10;
        ?>
        <!-- Creamos la tabla para la pagina -->
        <table>
            <thead>
            <td>
                <tr>
                    <th>Tabla del <?=$num?></th>
                </tr>
            </td>
            </thead>
            <tbody>
                <!-- Creamos el codigo php con un bucle for para visualizar en pantalla la tabla -->
                <?php for($i=0; $i <= $hasta; $i++) {?>
                <tr>
                    <td><?=$num?> x <?=$i?></td>
                    <td><?=$num*$i?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>


    </body>
</html>