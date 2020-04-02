<?php
require_once 'CocheEscolar.php';
require_once 'Nino.php';
require_once 'Escuela.php';

abstract class Index
{
    public function ejecutar()
    {
        $escuela = new Escuela('Dos Corazones','Ignacio Media 1212');

        $coche1 = new CocheEscolar('Barrio1','Matricula1','Conductor1','Ayudante1');
        $coche1->addNino(new Nino('Micaela', 'Direccion1'));
        $coche1->addNino(new Nino('Martina', 'Direccion2'));

        $ninoEncontrado = $coche1->buscarNino('Micaela');
        echo $ninoEncontrado;
    }
}

Index::ejecutar();

