<?php
require_once 'Casa.php';

class Nino
{
    private $_nombre;
    private $_casa;

    public function __construct($nombre, $direccion)
    {
        $this->_nombre = $nombre;
        $this->_casa = new Casa($direccion);
    }
    public function getNombre()
    {
        return $this->_nombre;
    }

    public function __toString()
    {
        return $this->_nombre. ' ' . $this->_casa;
    }

}

