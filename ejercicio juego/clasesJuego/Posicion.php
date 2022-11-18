<?php
namespace clasesJuego;
trait Posicion{
    private $posicionX;
    private $posicionY;
    private $posicionZ;
    
    function setPosicionX(float $posicionX): void{
        $this->posicionX = $posicionX;
    }
    function getPosicionX(){
        return $this->posicionX;
    }

    function setPosicionY(float $posicionY): void{
        $this->posicionY = $posicionY;
    }
    function getPosicionY(){
        return $this->posicionX;
    }

    function setPosicionZ(float $posicionZ): void{
        $this->posicionZ = $posicionZ;
    }
    function getPosicionZ(){
        return $this->posicionZ;
    }
    function getPosicion(){
        return "<b>Posición: </b>" .  "X: $this->posicionX, Y: $this->posicionY, Z: $this->posicionZ";
    }

}

?>