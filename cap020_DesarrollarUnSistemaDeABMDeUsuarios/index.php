<?php
require_once 'configuracion.php';
require_once PRE.DIR_SEPARA.'UsuarioPresentacion.php';

abstract class Index
{
    const SIN_PARAMETROS = 0;
    static public function run($get)
    {
        DEBUG ? var_dump($get) : null;
        if(count($get) != self::SIN_PARAMETROS){
            self::_procesarModulo();
        }else{
            self::_porDefecto();
        }
    }
    static private function _porDefecto()
    {
        echo 'Pagina por Defecto';
        echo '<ul>';
        echo '<li><a href="?modulo=listado">listado</li>';
        echo '</ul>';
    }
    static private function _moduloNoExiste()
    {
        echo 'Modulo no Existe';
    }
    static private function _procesarModulo()
    {
        switch ($_GET['modulo']){
            case 'listado':
                if (isset($_GET['mensage']) && $_GET['mensaje'] != "") {
                    echo "El Usuario ha sido ".$_GET['mensaje']." correctamente";
                }
                echo UsuarioPresentacion::listadoUsuarios();
                break;
            case 'detalle':
                echo UsuarioPresentacion::detalle($_GET['id']);
                break;
            case 'nuevousuario':
                echo UsuarioPresentacion::mostrarFormNuevoUsuario();
                break;
            case 'insertar':
                if(UsuarioPresentacion::guardarUsuario(
                    $_POST['nombre'],
                    $_POST['apellido'])) {
                        header("Location:index.php?modulo=listado&mensaje=guardado");
                }
                break;
            case 'modificarusuario':
                echo UsuarioPresentacion::mostrarFormModificarUsuario($_GET['id']);
                break;
            case 'modificar':
                if(UsuarioPresentacion::modificarUsuario(
                    $_POST['id'],
                    $_POST['nombre'],
                    $_POST['apellido'])){
                        header("Location:index.php?modulo=listado&mensaje=modificado");
                }
                break;
            case 'eliminar':
                if(UsuarioPresentacion::eliminarUsuario($_GET['id'])) {
                    header("Location:index.php?modulo=listado&mensaje=eliminado");
                }
                break;
            default:
                self::_moduloNoExiste();
                break;
        }
    }
}
Index::run($_GET);

