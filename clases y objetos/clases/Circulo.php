<?php
class Circulo{

private $radio;
const PI = M_PI;

    public function setRadio(float $radio)
    {
        $this->radio = $radio;
    }

    public function getRadio()
    {
        return $this->radio;
    }

    public function getArea()
    {
        return $this->radio * $this->radio * self::PI;
        
    }
}
?>