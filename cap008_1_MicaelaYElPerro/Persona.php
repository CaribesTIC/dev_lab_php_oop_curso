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

    public function darCariciaPerro($perro)
    {
        echo $perro->recibirCariciaCabeza() . '<br>';
    }

    public function darDeComerPerro($perro)
    {
        echo $perro->comer() . '<br>';
    }

}
