<?php
require_once 'Encuesta.php';
require_once 'Respuesta.php';

class Persona
{
    private $_sexo;
    private $_encuesta;
    private $_colRespuestas = array();

    public function __construct($sexo)
    {
        $this->_sexo = $sexo;
    }

    public function setEncuesta(Encuesta $encuesta)
    { 
        $this->_encuesta = $encuesta; 
    }

    public function addRespuesta(Respuesta $respuesta)
    {
        $this->_colRespuestas[] = $respuesta;
    }

    public function getSexo()
    {
        return $this->_sexo;
    }

    public function getResumenPreguntasRespondidas()
    {
        $retorno = "";
        foreach( $this->_colRespuestas as $respuesta ) {
            $retorno .= $respuesta->getPregunta() . ': ' . $respuesta . "<br/>";
        }
        return $retorno;
    }

}

