<?php

namespace App;

class Operacion extends ActiveRecord
{

  protected static $tabla = 'operaciones_importación';
  protected static $columnasDB = ['id_operacion','referencia','flete','formaPago','cliente','receptor','numero_booking','estatus_id_estatus','mercancía_id_mercancia','terminales_id_terminales','exportadores_id_exportadores','rutas_id_ruta','naviera_id','operadores_id_operadores','importadores_id_importadores','buques_id_buques','recargos_id_recargos'];

  private $id_operacion;
  private $referencia;
  private $flete;
  private $formaPago;
  private $cliente;
  private $receptor;
  private $numero_booking;

  private $estatus_id_estatus;
  private $mercancía_id_mercancia;
  private $terminales_id_terminales;
  private $exportadores_id_exportadores;
  private $rutas_id_ruta;
  private $naviera_id;
  private $operadores_id_operadores;
  private $importadores_id_importadores;
  private $buques_id_buques;
  private $recargos_id_recargos;
  
  public function __construct($args = [])
  {
    $this->id_operacion = $args['id_operacion'] ?? null;
    $this->referencia = $args['referencia'] ?? '';
    $this->flete = $args['flete'] ?? '';
    $this->formaPago = $args['formaPago'] ?? '';
    $this->cliente = $args['cliente'] ?? '';
    $this->receptor = $args['receptor'] ?? '';
    $this->numero_booking = $args['numero_booking'] ?? '';

    $this->estatus_id_estatus = $args['estatus_id_estatus'] ?? '';
    $this->mercancía_id_mercancia = $args['mercancia'] ?? '';
    $this->terminales_id_terminales = $args['terminal'] ?? '';
    $this->exportadores_id_exportadores = $args['exportador'] ?? '';
    $this->rutas_id_ruta = $args['ruta'] ?? '';
    $this->naviera_id = $args['naviera'] ?? '';
    $this->operadores_id_operadores = $args['operador'] ?? '';
    $this->importadores_id_importadores = $args['importador'] ?? '';
    $this->buques_id_buques = $args['buque'] ?? '';
    $this->recargos_id_recargos = $args['recargo'] ?? '';
  }

  public function getId_operacion()
  {
    return $this->id_operacion;
  }

  public function setId_operacion($id_operacion){
    $this->id_operacion = $id_operacion;
  }

  public function getReferencia()
  {
    return $this->referencia;
  }

  public function setReferencia($referencia){
    $this->referencia = $referencia;
  }

  public function getFlete()
  {
    return $this->flete;
  }

  public function setFlete($flete)
  {
    $this->flete = $flete;
  }

  public function getFormaPago(){
    return $this->formaPago;
  }

  public function setFormaPago($formaPago){
    $this->formaPago = $formaPago;
  }

  public function getCliente(){
    return $this->cliente;
  }

  public function setCliente($cliente){
    $this->cliente = $cliente;
  }

  public function getReceptor(){
    return $this->receptor;
  }

  public function setReceptor($receptor){
    $this->receptor = $receptor;
  }

  public function getNumero_booking()
  {
    return $this->numero_booking;
  }

  public function setNumero_booking($numero_booking)
  {
    $this->numero_booking = $numero_booking;
  }




  public function getEstatus_id_estatus(){
    return $this->estatus_id_estatus;
  }

  public function setEstatus_id_estatus($estatus_id_estatus){
    $this->estatus_id_estatus = $estatus_id_estatus;
  }

  public function getMercancía_id_mercancia()
  {
    return $this->mercancía_id_mercancia;
  }

  public function setMercancía_id_mercancia($mercancía_id_mercancia)
  {
    $this->mercancía_id_mercancia = $mercancía_id_mercancia;
  }

  public function getTerminales_id_terminales()
  {
    return $this->terminales_id_terminales;
  }

  public function setTerminales_id_terminales($terminales_id_terminales)
  {
    $this->terminales_id_terminales = $terminales_id_terminales;
  }

  public function getExportadores_id_exportadores()
  {
    return $this->exportadores_id_exportadores;
  }

  public function setExportadores_id_exportadores($exportadores_id_exportadores)
  {
    $this->exportadores_id_exportadores = $exportadores_id_exportadores;
  }

  public function getRutas_id_ruta()
  {
    return $this->rutas_id_ruta;
  }

  public function setRutas_id_ruta($rutas_id_ruta)
  {
    $this->rutas_id_ruta = $rutas_id_ruta;
  }

  public function getNaviera_id()
  {
    return $this->naviera_id;
  }

  public function setNaviera_id($naviera_id)
  {
    $this->naviera_id = $naviera_id;
  }

  public function getOperadores_id_operadores()
  {
    return $this->operadores_id_operadores;
  }

  public function setOperadores_id_operadores($operadores_id_operadores)
  {
    $this->operadores_id_operadores = $operadores_id_operadores;
  }

  public function getImportadores_id_importadores()
  {
    return $this->importadores_id_importadores;
  }

  public function setImportadores_id_importadores($importadores_id_importadores)
  {
    $this->importadores_id_importadores = $importadores_id_importadores;
  }

  public function getBuques_id_buques()
  {
    return $this->buques_id_buques;
  }

  public function setBuques_id_buques($buques_id_buques)
  {
    $this->buques_id_buques = $buques_id_buques;
  }

  public function getRecargos_id_recargos()
  {
    return $this->recargos_id_recargos;
  }

  public function setRecargos_id_recargos($recargos_id_recargos)
  {
    $this->recargos_id_recargos = $recargos_id_recargos;
  }

}
