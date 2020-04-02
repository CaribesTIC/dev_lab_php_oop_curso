<?php
abstract class Impresora
{
    public function imprimir($algo)
    {
        echo $algo->imprime();
    }
}

