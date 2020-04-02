<?php
require_once 'dispositivos/Lector.php';
require_once 'dispositivos/Escritor.php';

abstract class MaquinaDeEscribir
{
    static public function run(Lector $lector, Escritor $escritor)
    {
        $escritor->escribir($lector->leer());
    }
}

