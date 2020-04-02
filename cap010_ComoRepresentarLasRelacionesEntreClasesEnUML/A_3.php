<?php

require_once 'B.php';

class A
{
    private $_b;
    
    public function __construct()
    {
        $this->_b = new B();
    }

}

$a = new A();
