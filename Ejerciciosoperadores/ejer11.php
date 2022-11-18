<?php
    function distintosTipos(array &$valores): void {
        $elevado = 2;

        foreach ($valores as &$valor) {
            switch (true) {
                case is_int($valor):
                    $valor = pow($valor, $elevado);
                    $elevado++;

                    break;
                case is_float($valor):
                    $valor >= 0 ? $valor *= -1 : $valor = abs($valor);

                    break;

                case is_string($valor):
                    /**
                     * Compara a nivel de bit si es mayúscula/minúscula
                     * y lo invierte teniendo en cuenta el valor original
                     * mediante una puerta lógica XOR (^)
                     */
                    $valor = strtolower($valor) ^ strtoupper($valor) ^ $valor;

                    break;
            }
        }
    }

    $arrayValores = ["hOLA", "aDiOs", 2, 3, 4, 0.1, -0.1];
    distintosTipos($arrayValores);
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