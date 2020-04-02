<?php
require_once 'interfaces/Escritor.php';

class Impresora implements Escritor
{
    function escribir($texto)
    {
        echo $texto;
    }
}

