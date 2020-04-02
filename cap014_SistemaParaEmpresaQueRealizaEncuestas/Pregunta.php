<?php
class Pregunta
{
    private $_texto;

    public function __construct($texto)
    {
        $this->_texto = $texto;
    }
    public function __toString()
    {
        return $this->_texto;
    }
}


