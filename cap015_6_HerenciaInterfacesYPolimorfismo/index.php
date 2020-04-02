<?php
require_once 'Impresora.php';
require_once 'Curriculum.php';
require_once 'Informe.php';

abstract class Index
{
    public function run()
    {   
        $impresora = new Impresora();

        $impresora->imprimir(new Curriculum());
        $impresora->imprimir(new Informe());
    }
}
Index::run();

