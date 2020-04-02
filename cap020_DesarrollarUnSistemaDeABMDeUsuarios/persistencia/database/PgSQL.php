<?php
require_once PER.DIR_SEPARA.IFS.DIR_SEPARA.'DataBaseManejador.php';

class PgSQL implements DataBaseManejador
{
    const USUARIO = 'postgres';
    const CLAVE = '123';
    const BASE = 'oop';
    const SERVIDOR = 'localhost';
    const PUERTO = '5432';

    private $_conexion;

    public function conectar()
    {
        $con = "host="      . self::SERVIDOR 
             . " port="     . self::PUERTO
             . " dbname="   . self::BASE
             . " user="     . self::USUARIO
             . " password=" . self::CLAVE;

        $this->conexion = pg_connect($con);
	return (!$this->conexion) ? false : $this->conexion;
    }
    public function desconectar()
    {
        if (!empty($this->conexion)) 
	            @pg_close($this->conexion);	
    }
    public function traerDatos(Sql $sql)
    {
        if ($this->conexion) {
            $resultado = pg_query($sql);
            if (pg_num_rows($resultado)>=0) {
                while ($fila = pg_fetch_array($resultado)){
                    $todo[] = $fila;
                }
            }
            return isset($todo)?$todo:pg_affected_rows($resultado);
        }
    }
}

