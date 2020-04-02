<?php
require_once 'Hoja.php';
class Curriculum extends Hoja
{
    public function imprime()
    {
        return parent::imprime('imprimo curriculum');
    }
}


