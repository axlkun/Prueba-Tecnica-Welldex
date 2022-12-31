<?php

require '../includes/app.php';

use App\Naviera;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //debuguear($_POST['BL']);
  $naviera = new Naviera($_POST['naviera']);
  
  $naviera->crear();
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
    <h1>Naviera</h1>
<form method="POST">

  <label for="nombre">Nombre de la naviera:</label><br>
  <input type="text" id="nombre" name="naviera[nombre]"><br>

  <button type="submit">Enviar</button>
</form>
</body>
</html>