<?php

namespace App;

class Mercancia extends ActiveRecord{

  protected static $tabla = 'mercancía';
  protected static $columnasDB = ['id_mercancia','descripcion','pesoBruto','volumen','numeroBultos','numeroUnidades','dimensiones','marcas','tipoEmbalaje'];

  private $id_mercancia;
  private $descripcion;
  private $pesoBruto;
  private $volumen;
  private $numeroBultos;
  private $numeroUnidades;
  private $dimensiones;
  private $marcas;
  private $tipoEmbalaje;

  public function __construct($args = []) {
    $this->id_mercancia = $args['id'] ?? null;
    $this->descripcion = $args['descripcion'] ?? '';
    $this->pesoBruto = $args['pesoBruto'] ?? '';
    $this->volumen = $args['volumen'] ?? '';
    $this->numeroBultos = $args['numeroBultos'] ?? '';
    $this->numeroUnidades = $args['numeroUnidades'] ?? '';
    $this->dimensiones = $args['dimensiones'] ?? '';
    $this->marcas = $args['marcas'] ?? '';
    $this->tipoEmbalaje = $args['tipoEmbalaje'] ?? '';
  }
  
  public function getId_mercancia(){
    return $this->id_mercancia;
  }

  public function setId_mercancia($id_mercancia){
    $this->id_mercancia = $id_mercancia;
  }

  public function getDescripcion() {
    return $this->descripcion;
  }
  
  public function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }
  
  public function getPesoBruto() {
    return $this->pesoBruto;
  }
  
  public function setPesoBruto($pesoBruto) {
    $this->pesoBruto = $pesoBruto;
  }
  
  public function getVolumen() {
    return $this->volumen;
  }
  
  public function setVolumen($volumen) {
    $this->volumen = $volumen;
  }
  
  public function getNumeroBultos() {
    return $this->numeroBultos;
  }

  public function setNumeroBultos($numeroBultos){
    $this->numeroBultos = $numeroBultos;
  }

  public function getNumeroUnidades() {
    return $this->numeroUnidades;
  }
  
  public function setNumeroUnidades($numeroUnidades) {
    $this->numeroUnidades = $numeroUnidades;
  }
  
  public function getDimensiones() {
    return $this->dimensiones;
  }
  
  public function setDimensiones($dimensiones) {
    $this->dimensiones = $dimensiones;
  }
  
  public function getMarcas() {
    return $this->marcas;
  }
  
  public function setMarcas($marcas) {
    $this->marcas = $marcas;
  }
  
  public function getTipoEmbalaje() {
    return $this->tipoEmbalaje;
  }
  
  public function setTipoEmbalaje($tipoEmbalaje) {
    $this->tipoEmbalaje = $tipoEmbalaje;
  }
}
