<?php
require ('Coche.php');

class CocheConRemolque extends Coche{
    private $capacidadRemolque;

    public function setCapacidad(int $capacidadRemolque) {
        $this->capacidadRemolque = $capacidadRemolque;
    }
    
    public function getCapacidad() {
        return $this->capacidadRemolque;
    }

    public function pintarInformacion(){ ?>
        <div>
            <p><b>Coche: </b><?= $this->getMatricula(); ?>, <b>marca:</b> <?= $this->getMarca(); ?>, <b>con carga:</b> <?= $this->getCarga();?>, <b>y remolque de:</b> <?= $this->capacidadRemolque;?></p>
        </div>
        <br>

    <?php }
}

?>