<?php
require_once 'CriterioFiltro.php';

class FiltroAutor implements CriterioFiltro
{
    private $_nombre;
    private $_apellido;

    public function __construct($nombre,$apellido)
    {
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }
    public function esSeleccionable(Libro $libro)
    {
        $encontrado = false;

        foreach($libro->getAutores() as $autor){
            if($autor->getNombre() == $this->_nombre &&
                $autor->getApellido() == $this->_apellido){

                $encontrado = true;
            }
        }
        return $encontrado;
    }
}

