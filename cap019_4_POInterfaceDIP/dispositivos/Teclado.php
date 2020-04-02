<?php
require_once 'interfaces/Lector.php';

class Teclado implements Lector
{
    public function leer()
    {
        // a efectos del ejemplo, solo retornará un
        // texto como representación de una
        // entrada de datos
        return "texto ingresado";
    }
}

