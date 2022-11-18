<?php
class CuentaBancaria {
    private static $id = 100001;
    private $numeroCuenta;
    private $nombre;
    private $saldo;

    public function __construct(string $nombre='anonimo', float $saldo=0, int $numeroCuenta)
    {
        $this->numeroCuenta = CuentaBancaria::$id;
        CuentaBancaria::$id++;
        $this->nombre = $nombre;
        $this->saldo = $saldo;
        
    }

    public function ingresar (float $cantidadIngresada){
        $this->saldo += $cantidadIngresada;
        
    }

    public function retirar (float $cantidadRetirada){
        $this->saldo -= $cantidadRetirada;
        
    }

    public function saldo(){
        return $this->saldo;
    }

    public function transferir ( CuentaBancaria $cuenta, float $cantidad){
        $this->saldo -= $cantidad;
        $cuenta->saldo += $cantidad;
        
    }

    public function unir(CuentaBancaria $cuenta){
        $this->saldo += $cuenta->saldo;
            $cuenta->numeroCuenta = -1;
            $cuenta->bancarrota();
            return $this->cuenta;
    }

    public function bancarrota(){
        $this->saldo = 0;
        return $this->saldo;
    }

    public function mostrar(){
        ?>
        <div id="<?= $this->numeroCuenta; ?>">
            <p>Número de cuenta <b><?= $this->numeroCuenta; ?></b></p>
            <p>Nombre del propietario: <?= $this->nombre; ?></p>
            <p>Saldo: <?= $this->saldo; ?></p>
        </div>
        <br>
        <hr>


        <?php
    }
}




?>