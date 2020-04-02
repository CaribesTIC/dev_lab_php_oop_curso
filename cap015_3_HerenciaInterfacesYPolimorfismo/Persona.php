<?php

class Persona
{
    private $_nombre;
    private $_apellido;

    public function __construct($nombre, $apellido)
    {
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }
    public function __toString()
    {
        return $this->_nombre." ".$this->_apellido;
    }
}

