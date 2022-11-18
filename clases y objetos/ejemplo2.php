<!--Codigo PHP-->
<?php
require ('clases/Banco1.php');
$milloneti = new CuentaBancaria("Milloneti", 1000000);
    $agapito = new CuentaBancaria("Agapito", 30345);
    $pobreton = new CuentaBancaria("Pobretón", -10000);

        // Milloneti - Retirar 100 veces 1000€
        for ($i = 0; $i < 100; $i++) { 
            $milloneti->retirar(1000);
        }

        // Agapito - Ingreso de 1200€
        $agapito->ingresar(1200);

        // Todos - Mostrar salario
        $m = $milloneti->saldo();
        $a = $agapito->saldo();
        $p = $pobreton->saldo();

        // Pobretón - Fusionar cuenta con Milloneti
        $pobreton->unir($milloneti);

        // Agapito - Transferir mitad de su salario a Milloneti
        $agapito->transferir($milloneti, $agapito->mostrarSaldo() / 2);
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
    <h2>Cuenta bancaria</h2>
    <h3>Mostrar salario</h3>
    <p><?= $m ?></p>
    <p><?= $a ?></p>
    <p><?= $p ?></p>

    <h3>Mostrar información general</h3>
    <p><?= $milloneti->mostrar(); ?></p>
    <p><?= $agapito->mostrar(); ?></p>
    <p><?= $pobreton->mostrar(); ?></p>
    </body>
</html>