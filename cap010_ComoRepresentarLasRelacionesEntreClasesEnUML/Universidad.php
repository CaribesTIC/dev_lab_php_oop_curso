<?php

require_once 'Alumno.php';

class Universidad
{

    private $_alumnos = array();
    
    public function add(Alumno $alumno)
    {
        $this->_alumnos[] = $alumno;
    }

}

$universidad = new Universidad();
$universidad->add(new Alumno());
$universidad->add(new Alumno());
$universidad->add(new Alumno());

/*
* Esta universidad contiene 3 alumnos
*/
