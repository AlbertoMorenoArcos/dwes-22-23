<?php
class Coche {
    private $matricula;
    private $marca;
    private $carga;

    public function setMatricula(string $matricula) {
        $this->matricula = $matricula;
    }

    public function setMarca(string $marca){
        $this->marca = $marca;
    }

    public function setCarga(int $carga){
        $this->carga = $carga;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function getCarga(){
        return $this->carga;
    }

    public function pintarInformacion(){ ?>
        <div>
            <p><b>Coche: </b><?= $this->matricula; ?>, <b>marca:</b> <?= $this->marca; ?> <b>con carga</b> <?= $this->carga;?></p>
        </div>
        <br>

    <?php }

}


?>