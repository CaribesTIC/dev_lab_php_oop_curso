<?php
require_once 'CriterioFiltro.php';

class FiltroTitulo implements CriterioFiltro
{
    private $_titulo;

    public function __construct($titulo)
    {
        $this->_titulo = $titulo;
    }
    public function esSeleccionable(Libro $libro)
    {
        $encontrado = false;

        if(strpos($libro->getTitulo(), $this->_titulo)) {  
            $encontrado = true;
        }

        return $encontrado;
    }
}

