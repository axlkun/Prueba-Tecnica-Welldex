<?php

namespace App;

class Ruta extends ActiveRecord{

    protected static $tabla = 'rutas';
    protected static $columnasDB = ['id_ruta','puertoEmbarque','puertoDesembarque','paisOrigen','paisDestino','fechaZarpe','fechaArribo','aduanas_id_aduanas'];

    private $id_ruta;
    private $puertoEmbarque;
    private $puertoDesembarque;
    private $paisOrigen;
    private $paisDestino;
    private $fechaZarpe;
    private $fechaArribo;
    private $aduanas_id_aduanas;
    
    public function __construct($args = []) {
      $this->id_ruta = $args['id_ruta'] ?? null;
      $this->puertoEmbarque = $args['puertoEmbarque'] ?? '';
      $this->puertoDesembarque = $args['puertoDesembarque'] ?? '';
      $this->paisOrigen = $args['paisOrigen'] ?? '';
      $this->paisDestino = $args['paisDestino'] ?? '';
      $this->fechaArribo = $args['fechaArribo'] ?? '';
      $this->fechaZarpe = $args['fechaZarpe'] ?? '';
      $this->aduanas_id_aduanas = $args['aduana_id'] ?? '';
    }

    public function getId_ruta(){
      return $this->id_ruta;
    }

    public function setId_ruta($id_ruta){
      $this->id_ruta = $id_ruta;
    }
    
    public function getPuertoEmbarque() {
      return $this->puertoEmbarque;
    }
    
    public function setPuertoEmbarque($puertoEmbarque) {
      $this->puertoEmbarque = $puertoEmbarque;
    }
    
    public function getPuertoDesembarque() {
      return $this->puertoDesembarque;
    }
    
    public function setPuertoDesembarque($puertoDesembarque) {
      $this->puertoDesembarque = $puertoDesembarque;
    }

    public function getPaisOrigen() {
      return $this->paisOrigen;
    }
    
    public function setPaisOrigen($paisOrigen) {
      $this->paisOrigen = $paisOrigen;
    }

    public function getPaisDestino() {
      return $this->paisDestino;
    }
    
    public function setPaisDestino($paisDestino) {
      $this->paisDestino = $paisDestino;
    }

    public function getFechaZarpe()
    {
        return $this->fechaZarpe;
    }

    public function setFechaZarpe($fechaZarpe){
        $this->fechaZarpe = $fechaZarpe;
    }

    public function getFechaArribo()
    {
        return $this->fechaArribo;
    }

    public function setFechaArribo($fechaArribo){
        $this->fechaArribo = $fechaArribo;
    }

    public function getAduanas_id_aduanas() {
        return $this->aduanas_id_aduanas;
      }
      
      public function setAduanas_id_aduanas($aduanas_id_aduanas) {
        $this->aduanas_id_aduanas = $aduanas_id_aduanas;
      }
}
  