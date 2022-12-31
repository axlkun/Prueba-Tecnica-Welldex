<?php

namespace App;

class Terminal extends ActiveRecord{

  protected static $tabla = 'terminales';
  protected static $columnasDB = ['id_terminales','nombre'];

  private $id_terminales;
  private $nombre;
  
  public function __construct($args = []) {
    $this->id_terminales = $args['id_terminales'] ?? null;
    $this->nombre = $args['nombre'] ?? '';
  }

  public function getId_terminales(){
    return $this->id_terminales;
  }

  public function setId_terminales($id_terminales){
    $this->id_terminales = $id_terminales;
  }

  public function getNombre() {
    return $this->nombre;
  }
  
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
}
