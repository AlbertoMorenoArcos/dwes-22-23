<?php

interface PlataformaPago 
{
    public function establecerConexion(): void;
    public function compruebaSeguridad(): void;
    public function pagar(string $cuenta, int $cantidad): void;
}

class BitCoinConan implements PlataformaPago {
    public function establecerConexion(): void { ?>
        <p>Conexión BitcoinConan</p>
    <?php }

    public function compruebaSeguridad(): void { ?>
        <p>Conexión BitcoinConan</p>
    <?php }

    public function pagar(string $cuenta, int $cantidad): void { ?>
        <p>Pago Realizado BitcoinConan</p>
    <?php }
}

class BancoMaloMalisimo implements PlataformaPago {
    public function establecerConexion(): void { ?>
        <p>Conexión Banco Malo Malisimo</p>
    <?php }

    public function compruebaSeguridad(): void { ?>
        <p>Conexión Banco Malo Malisimo</p>
    <?php }

    public function pagar(string $cuenta, int $cantidad): void { ?>
        <p>Pago Realizado Banco Malo Malisimo</p>
    <?php }
}

class BancoMalvado implements PlataformaPago {
        public function establecerConexion(): void { ?>
            <p>Conexión Banco Malvado</p>
        <?php }

        public function compruebaSeguridad(): void { ?>
            <p>Conexión Segura Banco Malvado</p>
        <?php }

        public function pagar(string $cuenta, int $cantidad): void { ?>
            <p>Pago Realizado Banco Malvado</p>
        <?php }
    }

     $bancoMalvado = new BancoMalvado();
     $bancoBitcoin = new BancoMaloMalisimo();
     $bancoMaloMalisimo = new BitCoinConan();
     
     $bancoMalvado->establecerConexion(); 
     $bancoMalvado->compruebaSeguridad(); 
     $bancoMalvado->pagar("Alberto", 800); 

     $bancos = [$bancoMalvado, $bancoBitcoin, $bancoMaloMalisimo];

     for($i = 0; $i < sizeof($bancos); $i++) { 
        $bancos[rand(0, sizeof($bancos) - 1)]->pagar("Alberto", 800);}
     


?>

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