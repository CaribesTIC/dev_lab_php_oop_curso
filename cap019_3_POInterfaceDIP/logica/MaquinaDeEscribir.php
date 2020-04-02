<?php
require_once 'Lector.php';
require_once 'Escritor.php';

abstract class MaquinaDeEscribir
{
    static public function run(Lector $lector, Escritor $escritor)
    {
        $escritor->escribir($lector->leer());
    }
}

