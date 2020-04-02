<?php
require_once 'configuracion.php';
require_once PER.DIR_SEPARA.DBS.DIR_SEPARA.'DataBase.php';
require_once PER.DIR_SEPARA.DBS.DIR_SEPARA.'PgSQL.php';
require_once PER.DIR_SEPARA.DBS.DIR_SEPARA.'Sql.php';

class UsuarioPersistencia
{
    public function getAll()
    {
        $bd = new DataBase(new PgSQL());
        $sql = new Sql();
        $sql->addTable('usuarios');
        $sql->addSelect("id");
        $sql->addSelect("nombre");
        $sql->addSelect("apellido");
        return $bd->ejecutar($sql);
    }
    public static function load($id)
    {
        $bd = new DataBase(new PgSQL());
        $sql = new Sql();
        $sql->addTable('usuarios');
        $sql->addSelect("nombre");
        $sql->addSelect("apellido");
        $sql->addWhere("id = ".$id);
        return $bd->ejecutar($sql);
    }
    public function guardarUsuario($nombre, $apellido)
    {
        $bd = new DataBase(new PgSQL());
        $sql = new Sql();
        $sql->addFuncion("insert");
        $sql->addTable("usuarios");
        $sql->addSelect("nombre");
        $sql->addSelect("apellido");
        $sql->addValue("'".$nombre."'");
        $sql->addValue("'".$apellido."'");
        return $bd->ejecutar($sql);
    }
    public function modificarUsuario($id, $nombre, $apellido)
    {
        $bd = new DataBase (new PgSQL());
        $sql = new SQL();
        $sql->addFuncion("update");
        $sql->addTable("usuarios");
        $sql->addSelect("nombre='".$nombre."'");
        $sql->addSelect("apellido='".$apellido."'");
        $sql->addWhere("id=".$id);
        return $bd->ejecutar($sql);
    }
    public function eliminarUsuario($id)
    {
        $bd = new DataBase (new PgSQL());
        $sql = new SQL();
        $sql->addFuncion("delete");
        $sql->addTable("usuarios");
        $sql->addWhere("id=".$id);
        return $bd->ejecutar($sql);
    }
}

