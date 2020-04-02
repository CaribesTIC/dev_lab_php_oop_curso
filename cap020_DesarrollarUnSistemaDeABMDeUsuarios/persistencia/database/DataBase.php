<?php
require_once PER.DIR_SEPARA.IFS.DIR_SEPARA.'DataBaseManejador.php';
require_once 'Sql.php';

class DataBase
{
    private $_manejador;

    public function __construct(DataBaseManejador $manejador)
    {
        $this->_manejador = $manejador;
    }
    public function ejecutar(Sql $sql)
    {
        $this->_manejador->conectar();

        $datos = $this->_manejador->traerDatos($sql);

        $this->_manejador->desconectar();

        return $datos;
    }
}

