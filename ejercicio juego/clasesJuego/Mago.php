<?php
namespace clasesJuego;

abstract class Mago implements IPersonaje{

    use Posicion;

    public function defender()
    {
        echo "Hechizo protector<br>";
    }
    abstract function atacar();
        
}

?>