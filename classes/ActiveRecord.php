<?php

namespace App;

class ActiveRecord
{
    //Base de datos
    protected static $db;

    protected static $tabla = '';
    //este arreglo permite identificar que columnas tendran los registros
    protected static $columnasDB = [];

    public static function setDB($database)
    {
        self::$db = $database;
    }

    public function crear()
    {
        //sanitizar los datos
        $atributos = $this->santizarAtributos();

        //join hace un string a partir de un arreglo, el ',' es para indicar una separacion entre cada elemento del array
        $llaves = join(', ', array_keys($atributos));
        $valores = join("', '", array_values($atributos));

        //Insertar en la base de datos
        $query = "INSERT INTO " . static::$tabla . " ( ";
        $query .= $llaves;
        $query .= " ) VALUES (' ";
        $query .= $valores;
        $query .= " ')";

        //debuguear($query);

        //se hace referencia a la conexion del BD que ya instanciamos en app.php, se accede al metodo query (de la clase mysqli) y se le pasa la consulta
        $resultado = self::$db->query($query);

        if ($resultado) {

            header('Location: /index.php');
        }
    }

    public function actualizar($id)
{
    $atributos = $this->santizarAtributos();

    $valores = [];

    //Llenar el array de valores con un formato parecido al de crear
    foreach ($atributos as $key => $valor) {
        // Obtener el valor del atributo utilizando el método get correspondiente
        $getter = "get" . ucfirst($key);
        $valor = $this->$getter();
        $valores[] = "{$key}='{$valor}'";
    }

    $query = "UPDATE " . static::$tabla . " SET ";
    $query .= join(', ', $valores);
    $query .= " WHERE id_operacion = '" . self::$db->escape_string($id) . "' ";
    $query .= " LIMIT 1";

    //echo $query;

    $resultado = self::$db->query($query);

    if ($resultado) {

        header('Location: /index.php');
    }
}


    public function eliminar()
    {
        //Elimina el registro
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id) . " LIMIT 1";
        $resultado = self::$db->query($query);

        if ($resultado) {
            header('Location: /index.php');
        }
    }

   public function atributos(){
      $atributos = [];
      $ids = ['id_aduanas','id_buques','id_exportadores','id_importadores','id_mercancia','id','id_operadores','id_recargos','id_terminales','id_ruta','id_operacion'];
  
      foreach(static::$columnasDB as $columna){
         //ignora la columna id por que todavia no la tenemos (se genera automaticamente en la BDD)
         if(in_array($columna, $ids, true)) continue;
         $atributos[$columna] = $this->getValorAtributo($columna);
      }
      return $atributos;
  }
  
  private function getValorAtributo($atributo)
  {
      $metodo = "get" . ucfirst($atributo);
      if (method_exists($this, $metodo)) {
          return $this->$metodo();
      }
      throw new \Exception("No se puede acceder al atributo $atributo");
  }

     public function santizarAtributos(){
        $atributos = $this->atributos();
        //arreglo donde se almacenaran los datos ya sanitizados los cuales se ingresarán a la base de datos
        $sanitizado = [];
  
        //key son las columnas de la BD
        //value es lo que el usuario escribió, o sea el valor de la columna
        //recorre el array atributos, leeyendo la key y su value para despues copiar esa informacion en el array sanitizado manteniendo el orden a traves de la key pero insertando los valores ya sanitizados gracias al metodo escape_string propio de la clase mysqli instanciada en el objeto $db, pasandole como parametro los valores registrados por el usuario almacenados en la variable $value 
        foreach($atributos as $key => $value){
           //escape_string escapa los ', es decir si se introduce un: wendy's house, reescribe: wendy\'s house
           $sanitizado[$key] = self::$db->escape_string($value);
        }
        return $sanitizado;
     }

     public static function all(){
        $query = "SELECT * FROM " . static::$tabla; //self busca en esta clase (ActiveRecord), static lo busca en la clase en la cual se esta herdando
  
        $resultado = self::consultarSQL($query);
  
        return $resultado;
     }

     public static function get($cantidad){
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad; 
        
        $resultado = self::consultarSQL($query);
  
        return $resultado;
     }

     public static function find($id){
        
        $query = "SELECT * FROM " . static::$tabla . " WHERE id_operacion = ${id}";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado); //primer elemento de un array
     }

     public static function search($id){
        
        $query = "SELECT * FROM " . static::$tabla . " WHERE referencia = '${id}'";
        $resultado = self::consultarSQL($query);
        return array_shift($resultado); //primer elemento de un array
     }

     public static function consultarSQL($query){
        //Consultar la base de datos
        $resultado = self::$db->query($query);
  
        //Iterar los resultados
        $array = [];
        //Retorna un arreglo asociativo, por eso llamamos una funcion que convierte ese registro en un objeto y se lo asigna al array, por lo tanto tendriamos un array de objetos
        while($registro = $resultado->fetch_assoc()){
           $array[] = static::crearObjeto($registro);
        }
       
        //Liberar la memoria
        $resultado->free();
  
        //Retornar los resultados
        return $array;
     }

     protected static function crearObjeto($registro){
        $objeto = new static; //Nuevo objeto de la clase heredada de acuerdo a los atributos de su constructor
  
      //   foreach($registro as $key => $value){
      //      if(property_exists($objeto,$key)){ //detectar la $key y añadirle su $value
      //         $objeto->$key = $value;
      //      }
      //   }

      foreach($registro as $key => $value){
         if (property_exists($objeto, $key)) {
             $metodo = "set" . ucfirst($key);
             if (method_exists($objeto, $metodo)) {
                 $objeto->$metodo($value);
             }
         }
      }
  
        return $objeto;
     }

   public function sincronizar($args = []){
      //lee el arreglo asociativo del formulario mandado por POST y lo compara con el objeto de la clase, para asi reescribir los cambios en el objeto de acuerdo a los cambios
      foreach($args as $key => $value){
         if(property_exists($this,$key) && !is_null($value)){
            $setter = "set" . ucfirst($key);
            if(method_exists($this, $setter)){
                $this->$setter($value);
            }
         }
      }
   }
  
}
