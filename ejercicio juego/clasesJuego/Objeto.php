<?php
namespace clasesJuego;
class Objeto{

    use Descripcion;
    use Posicion;

    private $peso;


    function setPeso(float $peso){
        $this->peso = $peso;
    }

    function getPeso(){
        return "<b>Peso: </b>" . $this->peso;
    }


}

?>