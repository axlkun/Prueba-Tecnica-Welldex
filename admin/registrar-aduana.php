<?php

require '../includes/app.php';

use App\Aduana;

$aduana = new Aduana();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $aduana = new Aduana($_POST['aduana']);

  $aduana->crear();
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
  <h1>Aduana</h1>
<form method="POST">
  <label for="numero-aduana">Número de aduana:</label><br>
  <input type="number" id="numero-aduana" name="aduana[numero]"><br>

  <label for="aduana">Aduana:</label><br>
  <input type="text" id="aduana" name="aduana[nombre]"><br>

  <button type="submit">Enviar</button>
</form>
</body>
</html> 
