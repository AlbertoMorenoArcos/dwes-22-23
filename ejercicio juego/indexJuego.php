<?php
spl_autoload_register( function ($class) {
    $class = str_replace('\\', '/',$class);
    require("./$class.php");
});
?>



<!--Codigo HTML-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>

        </style>
    </head>
    
    <body>
    <?php

    echo "<h3><u>Humano</u></h3>";
    $humano = new clasesJuego\Humano();
    echo "<b>Ataque: </b>"; $humano->atacar();
    echo "<b>Defensa: </b>"; $humano->defender();
    $humano->setPosicionX(1);
    $humano->setPosicionY(2);
    $humano->setPosicionZ(3);
    $humano->getPosicion()."<br>";
    echo "<br>";
    
    echo "<h3><u>Mago Blanco</u></h3>";
    $magoBlanco = new clasesJuego\MagoBlanco();
    echo "<b>Ataque: </b>"; $magoBlanco->atacar();
    echo "<b>Defensa: </b>"; $magoBlanco->defender();
    $magoBlanco->setPosicionX(1);
    $magoBlanco->setPosicionY(2);
    $magoBlanco->setPosicionZ(3);
    echo $magoBlanco->getPosicion()."<br>";
    echo "<br>";
    
    echo "<h3><u>Mago Oscuro</u></h3>";
    $magoOscuro = new clasesJuego\MagoOscuro();
    echo "<b>Ataque: </b>"; $magoOscuro->atacar();
    echo "<b>Defensa: </b>"; $magoOscuro->defender();
    $magoOscuro->setPosicionX(1);
    $magoOscuro->setPosicionY(2);
    $magoOscuro->setPosicionZ(3);
    echo $magoOscuro->getPosicion()."<br>";
    echo "<br>";

    echo "<h3><u>Edificio</u></h3>";
    $edificio = new clasesJuego\Edificio();
    $edificio->setAltura(20.6);
    echo $edificio->getAltura()."<br>";
    echo $edificio->setDescripcion('Rascacielos');
    echo $edificio->getDescripcion()."<br>";
    $edificio->setPosicionX(3);
    $edificio->setPosicionY(2);
    $edificio->setPosicionZ(1);
    echo $edificio->getPosicion()."<br>";
    echo "<br>";

    echo "<h3><u>Objeto</u></h3>";
    $objeto = new clasesJuego\Objeto();
    $objeto->setPeso(37.8);
    echo $objeto->getPeso()."<br>";
    echo $objeto->setDescripcion('Bomba nuuucelar');
    echo $objeto->getDescripcion()."<br>";
    $objeto->setPosicionY(2);
    $objeto->setPosicionZ(1);
    $objeto->setPosicionX(3);
    echo $objeto->getPosicion()."<br>";

    ?>
    </body>
</html>