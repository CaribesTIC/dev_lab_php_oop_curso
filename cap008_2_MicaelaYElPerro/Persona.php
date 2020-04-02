<?php
class Persona
{
    private $_edad;
    private $_nombre;

    public function __construct($nombre, $edad)
    {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
    }

    public function tocar($objeto, $lugar)
    {
    return $objeto->tocan($lugar);
    }

    public function darComer($objeto, $comida)
    {
        return $objeto->comer($comida);
    }

}
