<?php
require_once 'dispositivos/Teclado.php';
require_once 'dispositivos/Impresora.php';

abstract class MaquinaDeEscribir
{
    static function run()
    {
        $miTeclado = new Teclado();
        $miImpresora = new Impresora();

        $miImpresora->escribir($miTeclado->leer());
    }
}

