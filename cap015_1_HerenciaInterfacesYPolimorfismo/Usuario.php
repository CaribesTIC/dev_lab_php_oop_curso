<?php

require_once 'Persona.php';

class Usuario extends Persona
{
    public function __construct($nombre, $apellido)
    {
        parent::__construct($nombre, $apellido);
    }
}

