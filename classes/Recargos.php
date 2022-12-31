<?php

namespace App;

class Recargos extends ActiveRecord{

    protected static $tabla = 'recargos';
    protected static $columnasDB = ['id_recargos','descripcion','monto'];

    private $id_recargos;
    private $descripcion;
    private $monto;

    public function __construct($args = [])   
    {
        $this->id_recargos = $args['id_recargo'] ?? null;
        $this->descripcion = $args['descripcion'] ?? '';
        $this->monto = $args['monto'] ?? '';
    }

    public function getId_recargos(){
        return $this->id_recargos;
    }

    public function setId_recargos($id_recargos){
        $this->id_recargos = $id_recargos;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getMonto(){
        return $this->monto;
    }

    public function setMonto($monto){
        $this->monto = $monto;
    }
}