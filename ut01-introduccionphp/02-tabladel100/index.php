        <!-- Creamos las variables -->
        <?php
        $num_filas = 10;
        $num_columnas = $num_filas;
        $n=0;
        

        function esPrimo($n){
            if ($n == 0 || $n == 1){
                return true;
            } else{
                $esprimo= true;
                $c = 2;
                while($esprimo && $c <= ($n/2)){
                    if(($n % $c) == 0 ){
                        $esprimo = false;
                    }
                }
                return $esprimo;
            }
        }
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabla de multiplicar PHP</title>
        <style>
            table, tr, td {
                border-collapse: collapse;
                border: 1px solid black;
            }
            table {
                text-align: center;
                width: 300px;
                margin: 0 auto;
            }
            .esprimo{
                background-color: #FF00FF;
            }
        </style>
    </head>
    <body>

        <!-- Creamos la tabla para la pagina -->
        <table>
            <thead>
            <td>
                <tr>
                    <th>Tabla </th>
                </tr>
            </td>
            </thead>
            <tbody>
             
            <!-- Creamos el codigo php con un bucle for para visualizar en pantalla la tabla -->
                <?php for($i=0; $i < $num_filas; $i++) {?>
                <tr>
                    <?php for($j=0; $j < $num_columnas; $j++) {?>
                    <td <?php if(esPrimo($i*10+$j)) echo 'class="esprimo"' ?> > <?=$i*10+$j?> </td>
                    <?php }?>
                </tr>
                <?php }?>
            
            </tbody>
        </table>


    </body>
</html>