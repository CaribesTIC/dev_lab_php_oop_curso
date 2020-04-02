<?php
require_once 'Hoja.php';
class Informe extends Hoja
{
    public function imprime()
    {
        return parent::imprime('imprimo informe');
    }
}

