<?php
require_once 'Libro.php';
require_once 'CriterioFiltro.php';

class Libreria
{
    private $_colLibros = array();

    public function busqueda(CriterioFiltro $filtro)
    {
        $librosRetorno = array();

        foreach( $this->_colLibros as $libro) {
            if( $filtro->esSeleccionable($libro)) {
                $librosRetorno[]= $libro;
            }
        }
        return $librosRetorno;
    }
    public function addLibro($titulo, $tema, $ano)
    {
        $this->_colLibros[] = new Libro($titulo,$tema,$ano);
    }
    public function addAutorLibro($titulo, $nombreAutor, $apellidoAutor)
    {
        foreach($this->_colLibros as $libro) {
            if($libro->getTitulo() == $titulo) {
                $libro->addAutor($nombreAutor,$apellidoAutor);
            }
        }
    }
}

