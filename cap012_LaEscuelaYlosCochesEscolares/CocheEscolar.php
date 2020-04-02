<?php
class CocheEscolar
{
    private $_colAlumnos = array();

    const LIMITE_CAPACIDAD = 5;

    public function estaLleno()
    {
        return count($this->_colAlumnos) >= self::LIMITE_CAPACIDAD;
    }

}

