<?php

require '../includes/app.php';

use App\Importador;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //debuguear($_POST['BL']);
  $importador = new Importador($_POST['importador']);
  
  $importador->crear();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/css/style.css">
    <title>Importaciones</title>
</head>
<body>
  <h1>Importador</h1>
<form method="POST">
  <label for="nombre">Nombre:</label><br>
  <input type="text" id="nombre" name="importador[nombre]"><br>

  <label for="bl">BL:</label><br>
  <input type="text" id="bl" name="importador[BL]"><br>

  <button type="submit">Enviar</button>
</form>
</body>
</html>