<?php
class Persona
{
    private $_edad;
    private $_nombre;
    private $_perro;
    private $_hermano;
    public $_gato;

    public function __construct($nombre, $edad)
    {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
    }

    public function __toString()
    {
        return $this->_nombre;
    }

    public function setPerro($perro) { $this->_perro = $perro; }

    public function setHermano($hermano) { $this->_hermano = $hermano; }

    public function setGato($gato) { $this->_gato = $gato; }

    public function tocar($objeto, $lugar)
    {
        return $objeto->tocan($lugar);
    }

    public function darComer($objeto, $comida)
    {
        return $objeto->comer($comida);
    }

    public function tirarCola($objeto)
    {
        return $objeto->aranna();
    }

}
