<?php
require_once 'logica/Escritor.php';

class Impresora implements Escritor
{
    function escribir($texto)
    {
        echo $texto;
    }
}

