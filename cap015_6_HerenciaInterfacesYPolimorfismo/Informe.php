<?php
require_once 'Imprimible.php';

class Informe implements Imprimible
{
    public function imprime()
    {
        return 'El informe se imprime a través de la interface<br/>';
    }
}

