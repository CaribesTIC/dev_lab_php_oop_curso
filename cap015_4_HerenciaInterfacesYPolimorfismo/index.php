<?php
require_once 'Impresora.php';
require_once 'Informe.php';
require_once 'Curriculum.php';
Impresora::imprimir(new Informe());
Impresora::imprimir(new Curriculum());

