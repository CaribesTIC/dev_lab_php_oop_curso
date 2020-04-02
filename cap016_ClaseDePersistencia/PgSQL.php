<?php
require_once 'DataBaseManejador.php';

class PgSQL implements DataBaseManejador
{
    const USUARIO = 'postgres';
    const CLAVE = '123';
    const BASE = 'myapp';
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
            while ($fila = pg_fetch_array($resultado)){
                $todo[] = $fila;
            }        
            return $todo;
        }
    }
}

