<?php
require_once 'Imprimible.php';

class Impresora
{
    public function imprimir(Imprimible $algo)
    {
        echo $algo->imprime();
    }
}

