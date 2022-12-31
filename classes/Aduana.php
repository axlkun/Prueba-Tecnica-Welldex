<?php

namespace App;

class Aduana extends ActiveRecord{

    protected static $tabla = 'aduanas';

    protected static $columnasDB = ['id_aduanas','numero','nombre'];

    private $id_aduanas;
    private $numero;
    private $nombre;

    public function __construct($args = [])
    {
        $this->id_aduana = $args['id'] ?? null;
        $this->numero = $args['numero'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
    }

    public function getId_aduanas()
    {
        return $this->id_aduanas;
    }

    public function setId_aduanas($id_aduanas)
    {
        $this->id_aduanas = $id_aduanas;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

}