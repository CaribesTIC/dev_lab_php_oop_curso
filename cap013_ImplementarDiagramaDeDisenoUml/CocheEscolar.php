<?php
class CocheEscolar
{
    private $_colAlumnos = array();
    private $_ninos = array();

    const LIMITE_CAPACIDAD = 5;

    public function estaLleno()
    {
        return count($this->_colAlumnos) >= self::LIMITE_CAPACIDAD;
    }

    public function addNino(Nino $nino)
    {
        $this->_ninos[] = $nino;
    }

    public function buscarNino($nombre)
    {
        foreach ($this->_ninos as $nino) {
            if ( $nino->getNombre() == $nombre ) {
                return $nino;
            }
        }
    }

}

