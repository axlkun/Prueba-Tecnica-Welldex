<?php

namespace App;

class Importador extends ActiveRecord
{

  protected static $tabla = 'importadores';
  protected static $columnasDB = ['id_importadores', 'nombre', 'BL'];

  private $id_importadores;
  private $nombre;
  private $BL;

  public function __construct($args = [])
  {
    $this->id_importadores = $args['id'] ?? null;
    $this->nombre = $args['nombre'] ?? '';
    $this->BL = $args['BL'] ?? '';
  }

  public function getId_importadores()
  {
    return $this->id_importadores;
  }

  public function setId_importadores($id_importadores){
    $this->id_importadores = $id_importadores;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getBL()
  {
    return $this->BL;
  }

  public function setBL($BL)
  {
    $this->BL = $BL;
  }
}
?>