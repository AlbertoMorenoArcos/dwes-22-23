<?php
namespace clasesJuego;

trait Descripcion{

    private $descripcion;

    function setDescripcion(string $descripcion){
        $this->descripcion = $descripcion;
    }
    function getDescripcion(){
        return "<b>Descripcion: </b>" . $this->descripcion;
    }
}

?>