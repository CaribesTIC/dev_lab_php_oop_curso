<?php
require_once 'Persona.php';

class Usuario extends Persona
{
    private $_id;
    private $_fechaIngreso;

    public function __construct($id, $nombre, $apellido)
    {
        parent::__construct($nombre, $apellido);

        $this->_id = $id;
        $this->_fechaIngreso = date('w');
    }
    public function __toString()
    {
        return $this->_id.' '.parent::__toString();
    }
}
