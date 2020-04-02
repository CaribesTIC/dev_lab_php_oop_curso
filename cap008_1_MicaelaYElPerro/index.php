<?php
require_once 'Persona.php';
require_once 'Perro.php';
$persona = new Persona('Micaela', 5);
$perro = new Perro('Tito', 'blanco y negro');
$persona->darCariciaPerro($perro);
$persona->darDeComerPerro($perro);
