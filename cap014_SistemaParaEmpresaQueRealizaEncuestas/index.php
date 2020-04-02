<?php
require_once 'Empresa.php';
require_once 'Persona.php';
require_once 'Respuesta.php';

abstract class Index
{
    static function run()
    {
        $empresa = new Empresa();
        $persona = new Persona('masculino');

        /* Defino la Encuesta en base al sexo */
        $sexo = $persona->getSexo();

        $encuesta = $empresa->getEncuesta($sexo);

        $persona->setEncuesta($encuesta);
        $preguntas = $encuesta->getPreguntas();

        /* Respondo las preguntas de la encuesta */
        foreach( $preguntas as $pregunta ) {
            $persona->addRespuesta(new Respuesta($pregunta, "si"));
        }
        /* Puedo Preguntarle a la Persona sus respuestas */
        echo $persona->getResumenPreguntasRespondidas();

        /* Si la empresa tuviera muchas personas, sería el proceso 
        * similar al caso anterior, solo que la empresa recorre todas las
        * personas encuestadas de una encuesta determinada */
    }
}
Index::run();
