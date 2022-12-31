<?php

require '../includes/app.php';

use App\Terminal;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //debuguear($_POST['BL']);
  $terminal = new Terminal($_POST['terminal']);
  
  $terminal->crear();
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
    <h1>Terminal</h1>
    <form method="POST">
        <label for="terminal">Nombre de la terminal:</label><br>
        <input type="text" id="terminal" name="terminal[nombre]"><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>