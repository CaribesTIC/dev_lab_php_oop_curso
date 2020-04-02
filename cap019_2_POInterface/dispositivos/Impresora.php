<?php
require_once 'Escritor.php';

class Impresora implements Escritor
{
    function escribir($texto)
    {
        echo $texto;
    }
}

