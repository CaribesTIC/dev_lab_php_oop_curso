<?php
class Escuela
{
    private $_nombre;
    private $_alumnos = array();

    public function __construct($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function addAlumno(Persona $persona)
    {
        $this->_alumnos[] = $persona;
    }

    public function __toString()
    {
        $retorno = '';
        foreach ($this->_alumnos as $alumno) {
            $retorno .= $alumno .', ';
            /*
            * Es lo mismo que decir
            *
            * $retorno .= $alumno->__toString() .', ';
            *
            * solo que el objeto sabe cómo convertirse en
            * String, tema que detecta cuando se hace
            * una operación de suma de cadenas
            * con el punto ".".
            */
        }
        return $retorno;
    }

    public function buscarCoche($matricula)
    {
        foreach ($this->_colCoches() as $coche) {
            if ( $coche->getMatricula() == $matricula ) {
                return $coche;
            }
        }
    }

}
