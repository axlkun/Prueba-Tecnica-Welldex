<?php
require '../includes/app.php';

use App\Recargos;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //debuguear($_POST['BL']);
  $recargo = new Recargos($_POST['recargo']);
  
  $recargo->crear();
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
    <h1>Recargo</h1>
    <form method="POST">
        <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion" name="recargo[descripcion]"></textarea>

        <label for="monto">Monto:</label><br>
        <input type="number" id="monto" name="recargo[monto]"><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>