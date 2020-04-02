<?php
interface DataBaseManejador
{
    public function conectar();
    public function desconectar();
    public function traerDatos(Sql $sql);
}

