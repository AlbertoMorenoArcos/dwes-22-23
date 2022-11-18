<?php
namespace clasesJuego;

class Humano implements IPersonaje
{
use Posicion;
function atacar()
{
    echo "Puñetazo<br>";
}
function defender()
{
    echo "Bloqueo<br>";
}

}
?>