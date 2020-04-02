<?php
class Persona
{
    private $_nombre;
    private $_apellido;
    private $_fechaNacimiento;
    /**
    *
    * @param string $fechaNacimiento 5/8/1973
    */

    public function __construct($fechaNacimiento)
    {
        $this->_fechaNacimiento = $fechaNacimiento;
    }

    public function decirEdad()
    {
        /* calculo la fecha a partir de $_fechaNacimiento */
        return $this->_calcularEdad();
    }

    private function _calcularEdad()
    {
        $diaActual = date(j);
        $mesActual= date(n);
        $anoActual = date(Y);
        list($dia, $mes, $ano) = explode("/", $this->_fechaNacimiento);
        // si el mes es el mismo pero el dia inferior aun
        // no ha cumplido anos, le quitaremos un ano al actual
        if (($mes == $mesActual) && ($dia > $diaActual)) {
            $anoActual = $anoActual - 1;
        }
        // si el mes es superior al actual tampoco habra
        // cumplido anos, por eso le quitamos un ano al actual
        if ($mes > $mesActual) {
            $anoActual = $anoActual - 1;
        }

        // ya no habria mas condiciones, ahora simplemente
        // restamos los anos y mostramos el resultado como su edad
        $edad = $anoActual - $ano;
        return $edad;
    }

}

