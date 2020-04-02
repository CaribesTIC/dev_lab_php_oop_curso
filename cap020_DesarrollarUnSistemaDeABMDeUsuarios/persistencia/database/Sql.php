<?php
class Sql
{
    private $_colWhere = array();
    private $_colSelect = array();
    private $_colFrom = array();
    private $_colFuncion = array();
    private $_colValue = array();

    public function addTable($table)
    {
        $this->_colFrom[] = $table;
    }
    public function addWhere($where)
    {
         $this->_colWhere[] = $where;
    }
    public function addFuncion($funcion)
    {
         $this->_colFuncion[] = $funcion;
    }
    public function addSelect($select)
    {
         $this->_colSelect[] = $select;
    }
    public function addValue($value)
    {
         $this->_colValue[] = $value;
    }
    private function _generar()
    {
        $select= implode(',',array_unique($this->_colSelect));
        $value = implode(',',array_unique($this->_colValue));
        $from  = implode(',',array_unique($this->_colFrom));
        $where = count($this->_colWhere)>0?' WHERE ':'';
        $where.= implode(' AND ',array_unique($this->_colWhere));
        $sql='';
        switch ($this->_colFuncion[0]){
            case 'insert':
                $sql='INSERT INTO '. $from . ' (' . $select .') VALUES ('. $value .');';
                break;
            case 'update':
                $sql='UPDATE ' . $from . ' SET ' . $select . $where . ';';  
                break;
            default:
                $sql='SELECT ' . $select . ' FROM ' . $from . $where .';';
                break;
        }
        return $sql;
    }
    public function __toString()
    {
        return $this->_generar();
    }
}

