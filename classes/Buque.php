<?php

namespace App;

class Buque extends ActiveRecord
{

  protected static $tabla = 'buques';

  protected static $columnasDB = ['id_buques', 'nombre'];

  public $id_buques;
  public $nombre;

  public function __construct($args = [])
  {
    $this->id_buques = $args['id'] ?? null;
    $this->nombre = $args['nombre'] ?? '';
  }

  public function getId_buques(){
    return $this->id_buques;
  }

  public function setId_buques($id_buques){
    $this->id_buques = $id_buques;
  }

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

}
