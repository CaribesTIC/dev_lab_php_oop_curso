<?php
require_once 'CriterioFiltro.php';

class FiltroAnual implements CriterioFiltro
{
    private $_ano;

    public function __construct($ano)
    {
        $this->_ano = $ano;
    }
    public function esSeleccionable(Libro $libro)
    {
        $encontrado = false;

        if($libro->getAno() == $this->_ano){
                $encontrado = true;
        }

        return $encontrado;
    }
}

