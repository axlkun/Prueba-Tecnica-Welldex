<?php

namespace App;

class Estatus extends ActiveRecord{

    protected static $tabla = 'estatus';
    protected static $columnasDB = ['id_estatus','numero','estatus'];

    private $id_estatus;
    private $numero;
    private $estatus;

    public function __construct($args = [])
    {
        $this->id_estatus = $args['id'] ?? null;
        $this->numero = $args['numero'] ?? '';
        $this->estatus = $args['estatus'] ?? '';
    }

    public function getId_estatus(){
        return $this->id_estatus;
    }

    public function setId_estatus($id_estatus){
        $this->id_estatus = $id_estatus;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getEstatus(){
        return $this->estatus;
    }

    public function setEstatus($estatus){
        $this->estatus = $estatus;
    }

}