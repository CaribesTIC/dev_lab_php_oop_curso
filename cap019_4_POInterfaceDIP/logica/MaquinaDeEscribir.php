<?php
require_once 'interfaces/Lector.php';
require_once 'interfaces/Escritor.php';

abstract class MaquinaDeEscribir
{
    static public function run(Lector $lector, Escritor $escritor)
    {
        $escritor->escribir($lector->leer());
    }
}

