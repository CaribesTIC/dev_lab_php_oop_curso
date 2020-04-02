<?php
require_once 'Pregunta.php';

class Respuesta
{
    private $_texto;
    private $_pregunta;

    public function __construct(Pregunta $pregunta, $texto)
    {
        $this->_pregunta = $pregunta;
        $this->_texto = $texto;
    }
    public function getPregunta()
    {
        return $this->_pregunta;
    }
    public function __toString()
    {
        return $this->_texto;
    }

}


