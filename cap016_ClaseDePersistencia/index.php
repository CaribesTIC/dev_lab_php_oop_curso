<?php
require_once 'DataBase.php';
require_once 'PgSQL.php';
require_once 'Sql.php';

abstract class Index
{
    public function run()
    {
        $bd = new DataBase(new PgSQL());

        $sql = new Sql();
        $sql->addTable('seguridad.usuario');
        $sql->addWhere('id = 7');
        $sql->addWhere("usuario = 'ejimenez' ");

        $usuario = $bd->ejecutar($sql);

        echo highlight_string(var_export($usuario, true));
    }
}

Index::run();

