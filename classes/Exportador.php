<?php

namespace App;

class Exportador extends ActiveRecord {

    protected static $tabla = 'exportadores';
    protected static $columnasDB = ['id_exportadores','nombre','pais'];

    private $id_exportadores;
    private $nombre;
    private $pais;
    
    public function __construct($args = []) {
      $this->id_exportadores = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->pais = $args['pais'] ?? '';
    }

    public function getId_exportadores(){
      return $this->id_exportadores;
    }

    public function setId_exportadores($id_exportadores){
      $this->id_exportadores = $id_exportadores;
    }
    
    public function getNombre() {
      return $this->nombre;
    }
    
    public function setNombre($nombre) {
      $this->nombre = $nombre;
    }
    
    public function getPais() {
      return $this->pais;
    }
    
    public function setPais($pais) {
      $this->pais = $pais;
    }
   
  }
?>