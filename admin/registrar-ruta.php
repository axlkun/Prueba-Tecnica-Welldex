<?php

require '../includes/app.php';

use App\Ruta;
use App\Aduana;

$ruta = new Ruta();
$aduanas = Aduana::all();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  
  $ruta = new Ruta($_POST['ruta']);
  $ruta->crear();
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
    <h1>Ruta</h1>
    <form method="POST">
        <label for="embarque">Puerto de embarque:</label><br>
        <input type="text" id="embarque" name="ruta[puertoEmbarque]"><br>

        <label for="desembarque">Puerto de desembarque:</label><br>
        <input type="text" id="desembarque" name="ruta[puertoDesembarque]"><br>

        <label for="origen">Pais de origen:</label><br>
        <input type="text" id="origen" name="ruta[paisOrigen]"><br>

        <label for="destino">Pais destino:</label><br>
        <input type="text" id="destino" name="ruta[paisDestino]"><br>

        <label for="zarpe">Fecha de zarpe</label><br>
        <input type="date" id="zarpe" name="ruta[fechaZarpe]"><br>

        <label for="arribo">Fecha de arribo</label><br>
        <input type="date" id="arribo" name="ruta[fechaArribo]"><br>

        <div class="div-form">
        <label for="aduana">Aduana:</label> <a class="hipervinculo" href="registrar-aduana.php" target="_blank">Registre la aduana aquí</a></div><br>
        <select name="ruta[aduana_id]" id="aduana"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($aduanas as $aduana): ?>
                        <option 
                            value="<?php echo $aduana->getId_aduanas(); ?>">
                            <?php echo $aduana->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>