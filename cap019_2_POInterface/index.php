<?php
require_once "logica/MaquinaDeEscribir.php";
require_once "dispositivos/Teclado.php";
require_once "dispositivos/Impresora.php";

abstract class Index
{
    static public function run()
    {
        MaquinaDeEscribir::run(new Teclado(), new Impresora());        
    }
}

Index::run();

