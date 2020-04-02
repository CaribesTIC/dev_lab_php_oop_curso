<?php
/* Forma de uso en index.php */

/* Solo vamos a requerir la clase que
vamos a usar, no la clase padre, ese es
problema de la clase Usuario (recuerden
las flechas de relaciones, cada clase debe
saber a quién necesita para funcionar) */

require_once 'Usuario.php';

$usuario = new Usuario('Enrique','Place');

echo $usuario;

