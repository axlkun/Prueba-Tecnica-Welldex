<?php

require '../includes/app.php';

use App\Exportador;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //debuguear($_POST['nombre']);
  $exportador = new Exportador($_POST['exportador']);
  
  $exportador->crear();
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
  <h1>Exportador</h1>
  <form method="POST">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="exportador[nombre]"><br>

    <label for="pais">Pais:</label><br>
    <input type="text" id="pais" name="exportador[pais]"><br>

    <button type="submit">Enviar</button>
  </form>
</body>

</html>