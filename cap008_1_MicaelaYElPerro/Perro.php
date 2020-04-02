<?php
class Perro
{
    private $_color;
    private $_nombre;
    private $_estomagoLleno = false;

    public function __construct($nombre, $color)
    {
        $this->_nombre = $nombre;
        $this->_color = $color;
    }

    public function recibirCariciaCabeza()
    {
        return $this->moverLaCola();
    }

    public function moverLaCola()
    {
        return 'estoy moviendo la cola!';
    }

    public function comer()
    {
        $this->_estomagoLleno = true;
        sleep(5);
        return $this->_hacerDigestion();
    }

    public function hacerNecesidades()
    {
        return 'hago caca!';
    }

    private function _hacerDigestion()
    {
        $retorno = null;
        if($this->_estomagoLleno){
            $this->_estomagoLleno = false;
            $retorno = $this->hacerNecesidades();
        }
        return $retorno;
    }

}
