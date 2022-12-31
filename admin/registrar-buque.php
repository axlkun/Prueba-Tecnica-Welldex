<?php

require '../includes/app.php';

use App\Buque;

$aduana = new Buque();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $aduana = new Buque($_POST['buque']);

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
    <h1>Buque</h1>
<form method="POST">

  <label for="nombre">Nombre del buque:</label><br>
  <input type="text" id="nombre" name="buque[nombre]"><br>

  <button type="submit">Enviar</button>
</form>
</body>
</html>