<?php
namespace clasesJuego;

class Edificio{
    use Descripcion;
    use Posicion;

    private $altura;

    function setAltura(float $altura){
        $this->altura = $altura;
    }

    function getAltura(){
        return "<b>Altura: </b>" . $this->altura;
    }


}

?>