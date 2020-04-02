<?php 
require_once 'Persona.php';
$persona1 = new Persona('5/8/1973');
echo $persona1->decirEdad();echo '<br>';
echo '<pre>';var_dump($persona1);echo '</pre>';
$persona2 = new Persona('5/8/1973');
echo $persona2->decirEdad();echo '<br>';
echo '<pre>';var_dump($persona2);echo '</pre>';
