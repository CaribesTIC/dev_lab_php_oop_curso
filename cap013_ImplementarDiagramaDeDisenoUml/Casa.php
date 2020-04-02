<?php
class Casa
{
    private $_direccion;

    public function __construct($direccion)
    {
        $this->_direccion = $direccion;
    }

    public function __toString()
    {
        return $this->_direccion;
    }

}
