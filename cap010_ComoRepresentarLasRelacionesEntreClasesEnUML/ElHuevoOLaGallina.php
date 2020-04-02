<?php

class A
{

    private $_b;

    public function __construct()
    {
        $this->_b = new B();
    }

}

class B
{

    private $_a;
    
    public function __construct()
    {
        $this->_a = new A();
    }

}
