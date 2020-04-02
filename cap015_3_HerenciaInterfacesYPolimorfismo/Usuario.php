<?php
require_once 'Persona.php';

class Usuario extends Persona
{
    private $_id;
    private $_fechaIngreso;
    static protected $_ultimoId = 0;

    public function __construct($nombre, $apellido)
    {
        parent::__construct($nombre, $apellido);

        self::$_ultimoId += 1;

        $this->_id = self::$_ultimoId;
        $this->_fechaIngreso = date('w');
    }
    public function __toString()
    {
        return $this->_id.'-'.parent::__toString();
    }
}

