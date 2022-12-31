<?php

namespace App;

class Naviera extends ActiveRecord{

  protected static $tabla = 'naviera';
  protected static $columnasDB = ['id','nombre'];

  private $id;
  private $nombre;
  
  public function __construct($args = []) {
    $this->id = $args['id'] ?? null;
    $this->nombre = $args['nombre'] ?? '';
  }
  
  public function getId(){
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
  }

  public function getNombre() {
    return $this->nombre;
  }
  
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
}
