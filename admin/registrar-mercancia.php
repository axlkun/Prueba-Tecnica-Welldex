<?php

require '../includes/app.php';

use App\Mercancia;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  //debuguear($_POST['BL']);
  $mercancia = new Mercancia($_POST['mercancia']);
  
  $mercancia->crear();
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
    <h1>Mercancia</h1>
    <form method="POST">
        <label for="descripcion">Descripcion:</label>
        <textarea id="descripcion" name="mercancia[descripcion]"></textarea>

        <label for="peso">Peso bruto:</label><br>
        <input type="number" id="peso" name="mercancia[pesoBruto]"><br>

        <label for="volumen">Volumen:</label><br>
        <input type="number" id="volumen" name="mercancia[volumen]"><br>

        <label for="bultos">Numero de bultos:</label><br>
        <input type="number" id="bultos" name="mercancia[numeroBultos]"><br>

        <label for="unidades">Numero de unidades:</label><br>
        <input type="number" id="unidades" name="mercancia[numeroUnidades]"><br>

        <label for="dimensiones">Dimensiones:</label><br>
        <input type="text" id="dimensiones" name="mercancia[dimensiones]"><br>

        <label for="marcas">Marcas:</label>
        <textarea id="marcas" name="mercancia[marcas]"></textarea>

        <label for="embalaje">Tipo de embalaje:</label><br>
        <input type="text" id="embalaje" name="mercancia[tipoEmbalaje]"><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>