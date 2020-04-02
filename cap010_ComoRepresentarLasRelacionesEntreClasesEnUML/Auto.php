<?php

require_once 'Motor.php';
require_once 'TanqueCombustible.php';
require_once 'AntenaRadio.php';

class Auto
{

    private $_motor;
    private $_tanqueCombustible;
    private $_antenaRadio;

    public function __construct()
    {

        $this->_motor = new Motor();
        $this->_tanqueCombustible = new TanqueCombustible();
        $this->_antenaRadio = new AntenaRadio();

    }

}

$auto = new Auto();
