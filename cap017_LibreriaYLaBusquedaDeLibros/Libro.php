<?php
require 'Autor.php';

class Libro
{
    private $_titulo;
    private $_tema;
    private $_ano;
    private $_colAutores = array();

    public function __construct($titulo,$tema,$ano)
    {
        $this->_titulo = $titulo;
        $this->_tema = $tema;
        $this->_ano = $ano;
    }
    public function addAutor($nombre,$apellido)
    {
        $this->_colAutores[] = new Autor($nombre,$apellido);
    }
    public function getTitulo()
    {
        return $this->_titulo;
    }
    public function getTema()
    {
        return $this->_tema;
    }
    public function getAno()
    {
        return $this->_ano;
    }
    public function getAutores()
    {
        return $this->_colAutores;
    }
    public function __toString()
    {
        return $this->_titulo;
    }
}

