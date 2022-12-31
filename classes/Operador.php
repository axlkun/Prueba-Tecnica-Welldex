<?php

namespace App;

class Operador extends ActiveRecord{

  protected static $tabla = 'operadores';
  protected static $columnasDB = ['id_operadores','nombre'];

  private $id_operadores;
  private $nombre;
  
  public function __construct($args = []) {
    $this->id_operadores = $args['id_operador'] ?? null;
    $this->nombre = $args['nombre'] ?? '';
  }
  
  public function getId_operadores(){
    return $this->id_operadores;
  }

  public function setId_operadores($id_operadores){
    $this->id_operadores = $id_operadores;
  }

  public function getNombre() {
    return $this->nombre;
  }
  
  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
}
