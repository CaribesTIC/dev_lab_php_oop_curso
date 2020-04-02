<?php
require_once "logica/MaquinaDeEscribir.php";

abstract class Index
{
    static public function run()
    {
        echo 'Ejecuto máquina de escribir->';
        MaquinaDeEscribir::run();        
    }
}

Index::run();

