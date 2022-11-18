<?php
require ('Coche.php');

class CocheGrua extends Coche{
    private $cocheCargado;

    public function cargar($cocheCargado) {
        $this->$cocheCargado = $cocheCargado;
    }
    
    public function descargar() {
        return $this->cocheCargado = null;
    }

    public function pintarInformacion(){ 
        parent::pintarInformacion();
        if($this->cocheCargado == null){
            ?>
            <div>
            <p><b>Coche: </b><?= $this->getMatricula(); ?>, <b>marca:</b> <?= $this->getMarca(); ?>, <b>con carga:</b> <?= $this->getCarga();?></p>
            </div>
            <?php
            echo "No lleva ningun coche.";
        }
        else{
            ?>
            <div>
                <p><b>Coche: </b><?= $this->getMatricula(); ?>, <b>marca:</b> <?= $this->getMarca(); ?>, <b>con carga:</b> <?= $this->getCarga();?></p>
                <p><b>Lleva Coche: </b><?= $this->getMatricula($cocheCargado); ?>, <b>marca:</b> <?= $this->cocheCargado->getMarca(); ?>, <b>con carga:</b> <?= $this->cocheCargado->getCarga();?>.</p>
            </div>
            <br>
            <?php 
        }
       

   
    
}
}

?>