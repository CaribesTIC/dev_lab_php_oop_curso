<?php
require_once 'Usuario.php';

$usuario1 = new Usuario('Enrique','Place');
$usuario2 = new Usuario('Bruce','Lee');
$usuario3 = new Usuario('Linus','Torvalds');

echo $usuario1.'<br/>'.$usuario2.'<br/>'.$usuario3;

