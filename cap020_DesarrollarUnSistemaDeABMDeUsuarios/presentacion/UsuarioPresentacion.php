<?php
require_once 'configuracion.php';
require_once DOM.DIR_SEPARA.'Usuario.php';

abstract class UsuarioPresentacion
{
    static public function listadoUsuarios()
    {
        $usuarios_arr = Usuario::getAll();
        $retorno = '<ul>';
            foreach($usuarios_arr as $objetoUsuario){
                $retorno .= '<li>'.$objetoUsuario;
                $retorno .= " <a href='?modulo=detalle&id=".$objetoUsuario->getId() ."'>Mostrar</a> | ";
                $retorno .= " <a href='?modulo=modificarusuario&id=". $objetoUsuario->getId() ."'>Modificar</a> | ";
                $retorno .= " <a href='?modulo=eliminar&id=". $objetoUsuario->getId() ."'>Eliminar</a> | ";
                $retorno .='</li>';
            }
            $retorno .= "<li><a href='?modulo=nuevousuario'>Nuevo Usuario</a>";
            $retorno .= '</ul>';
            return $retorno;
    }
    static public function detalle($id)
    {
        return Usuario::load($id);
    }
    static public function mostrarFormNuevoUsuario()
    {
        return self::_mostrarFormulario();
    }
    static public function mostrarFormModificarUsuario($id)
    {
        $usuario = Usuario::load($id);
        $form = self::_mostrarFormulario(
            $id,
            $usuario->getNombre(),
            $usuario->getApellido(),
            "modificar"
        );
        return $form;
    }
    static public function modificarUsuario($id, $nombre, $apellido)
    {
        $usuario = new Usuario($id, $nombre, $apellido);
        return $usuario->modificarUsuario();
    }
    static public function eliminarUsuario($id)
    {
        $usuario = new Usuario($id);
        return $usuario->eliminarUsuario();
    }
    static private function _mostrarFormulario($id = "", $nombre = "", $apellido = "", $accion = "insertar")
    {
        $retorno = "";
        $retorno = "<form action='?modulo=".$accion."' method='post'>";
        $retorno .= "<input type='hidden' name='id' value='".$id."' />";
        $retorno .= "Nombre:<input type='text' name='nombre' value='". $nombre."' /> ";
        $retorno .= "Apellido:<input type='text' name='apellido' value='".$apellido."'/>";
        $retorno .= "<input type='submit' name='submit' value='".ucwords($accion)."' />";
        $retorno .= "</form>";
        return $retorno;
    }
    static public function guardarUsuario($nombre, $apellido)
    {
        $usuarioNuevo = new Usuario(NULL,$nombre, $apellido);
        return $usuarioNuevo->guardarUsuario();
    }
}

