<?php
class Autor
{
    private $_nombre;
    private $_apellido;

    public function __construct($nombre, $apellido)
    {
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }
    public function getNombre()
    {
        return $this->_nombre;
    }
    public function getApellido()
    {
        return $this->_apellido;
    }
    public function __toString()
    {
        return $this->_nombre . ' ' . $this->_apellido;
    }
}

