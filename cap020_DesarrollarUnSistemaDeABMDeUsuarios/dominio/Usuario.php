<?php
require_once 'configuracion.php';
require_once PER.DIR_SEPARA.'UsuarioPersistencia.php';

class Usuario
{
    private $_id;
    private $_nombre;
    private $_apellido;
    public function __construct($id = "", $nombre = "", $apellido = "")
    {
        $this->_id = $id;
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
    }
    public function getId()
    {
        return $this->_id;
    }
    public function getNombre()
    {
        return $this->_nombre;
    }
    public function getApellido()
    {
        return $this->_apellido;
    }
    public static function getAll()
    {
        $usuarioPersistencia = new UsuarioPersistencia();
        $datos_array = $usuarioPersistencia->getAll();
        foreach($datos_array as $usuario_array){
            $id = $usuario_array['id'];
            $nombre = $usuario_array['nombre'];
            $apellido = $usuario_array['apellido'];
            $retorno[] = new Usuario($id, $nombre, $apellido);
        }
        return $retorno;
    }
    public static function load($id)
    {
        $usuarioPersistencia = new UsuarioPersistencia();
        $datos_array = $usuarioPersistencia->load($id);
        foreach($datos_array as $usuario_array){
            $usuario = new Usuario(
                $id,
                $usuario_array['nombre'],
                $usuario_array['apellido']
            );
        }
        return $usuario;
    }
    public function guardarUsuario()
    {
        $usuarioPersistencia = new UsuarioPersistencia();
        $guardo = $usuarioPersistencia->guardarUsuario(
            $this->_nombre,
            $this->_apellido
        );
        return $guardo;
    }
    public function modificarUsuario()
    {
        $usuarioPersistencia = new UsuarioPersistencia();
        $modificar = $usuarioPersistencia->modificarUsuario(
            $this->_id,
            $this->_nombre,
            $this->_apellido
        );
        return $modificar;
    }
    public function eliminarUsuario()
    {
        $usuarioPersistencia = new UsuarioPersistencia();
        $eliminar = $usuarioPersistencia->eliminarUsuario($this->_id);
        return $eliminar;
    }
    public function __toString()
    {
        return $this->_id." ".$this->_nombre." ".$this->_apellido;
    }
}

