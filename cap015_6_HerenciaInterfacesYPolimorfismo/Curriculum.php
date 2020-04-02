<?php
require_once 'Imprimible.php';

class Curriculum implements Imprimible
{
     /* Inmediatamente de hacer el implements,
     si intentamos ejecutar el sistema, nos dirá
     que nos falta el método imprime, por lo tanto
     lo agregamos a continuación*/

    public function imprime()
    {
        return 'El currículum se imprime a través de la interface<br/>';
    }
}

