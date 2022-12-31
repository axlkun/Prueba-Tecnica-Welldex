<?php

function conectarDB() : mysqli{
    $db = new mysqli('localhost','root','admindb10','importaciones');
    $db->set_charset('utf8');  

    if(!$db){
        echo "Error, no se pudo conectar!";
        exit; //se detiene la ejecucion del codigo
    }

    return $db;
}
