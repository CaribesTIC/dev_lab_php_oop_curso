<?php
class Perro
{
    private $_color;
    private $_nombre;
    private $_estomago;

    public function __construct($nombre, $color)
    {
        $this->_nombre = $nombre;
    $this->_color = $color;
    }

    public function tocan($lugar)
    {
        $retorno = null;
       if($lugar == 'cabeza'){
            $retorno = $this->_moverCola();
        }
        return $retorno;
    }

    private function _moverCola()
    {
        return 'estoy moviendo la cola!';
    }

    public function comer($comida)
    {
        $this->_estomago = $comida;
        sleep(5);
        return $this->_hacerDigestion();
    }

    private function _hacerDigestion()
    {
        $retorno = null;
        if(isset($this->_estomago)){
            $this->_estomago = null;
            $retorno = $this->_hacerNecesidades();
        }
        return $retorno;
    }

    private function _hacerNecesidades()
    {
        return 'hago caca!';
    }

}
