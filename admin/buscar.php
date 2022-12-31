<?php
require '../includes/app.php';

use App\Operacion;



//debuguear($mercancias);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $referencia = $_POST['referencia'];
    $operacion = Operacion::search($referencia);
    //debuguear($operacion);
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
    <div class="importaciones-buscar">
        <h1>Buscar</h1>
        <a href="/index.php" class="boton">Salir</a>
    </div>
    <form method="POST">
    <label for="referencia">Ingresa el folio o referencia:</label><br>
    <input type="text" id="referencia" name="referencia">
    <button type="submit">Buscar</button>
    </form><br>

    <form>
        <label for="referencia">Folio o referencia:</label><br>
        <input type="text" id="referencia" name="operacion[referencia]" value="<?php echo $operacion->getReferencia(); ?>" readonly><br>

        <label for="flete">Flete:</label><br>
        <input type="number" id="flete" name="operacion[flete]" value="<?php echo $operacion->getFlete(); ?>" readonly><br>

        <label for="formapago">Forma de pago:</label><br>
        <input type="text" id="formapago" name="operacion[formaPago]" value="<?php echo $operacion->getFormaPago(); ?>" readonly><br>

        <label for="cliente">Cliente:</label><br>
        <input type="text" id="cliente" name="operacion[cliente]" value="<?php echo $operacion->getCliente(); ?>" readonly><br>

        <label for="receptor">Receptor:</label><br>
        <input type="text" id="receptor" name="operacion[receptor]" value="<?php echo $operacion->getReceptor(); ?>" readonly><br>

        <label for="booking">Numero de booking:</label><br>
        <input type="text" id="booking" name="operacion[numero_booking]" value="<?php echo $operacion->getNumero_booking(); ?>" readonly><br>

        <label for="estatus">Estatus:</label><br>
        <select name="operacion[estatus]" id="estatus" disabled><br>
                        <option><?php echo $operacion->getEstatus_id_estatus(); ?></option> 
        </select><br>

        <label for="mercancia">Mercancia:</label><br>
        <select name="operacion[mercancia]" id="mercancia" disabled><br>
                        <option><?php echo $operacion->getMercancía_id_mercancia(); ?></option> 
        </select><br>

        <label for="terminal">Terminal:</label><br>
        <select name="operacion[terminal]" id="terminal" disabled><br>
                        <option><?php echo $operacion->getTerminales_id_terminales(); ?></option> 
        </select><br>

        <label for="exportador">Exportador:</label><br>
        <select name="operacion[exportador]" id="exportador" disabled><br>
                        <option><?php echo $operacion->getExportadores_id_exportadores(); ?></option> 
        </select><br>

        <label for="ruta">Ruta:</label><br>
        <select name="operacion[ruta]" id="ruta" disabled><br>
                        <option><?php echo $operacion->getRutas_id_ruta(); ?></option> 
        </select><br>

        <label for="naviera">Naviera:</label><br>
        <select name="operacion[naviera]" id="naviera" disabled><br>
                        <option><?php echo $operacion->getNaviera_id(); ?></option> 
        </select><br>

        <label for="operador">Operador:</label><br>
        <select name="operacion[operador]" id="operador" disabled><br>
                        <option><?php echo $operacion->getOperadores_id_operadores(); ?></option> 
        </select><br>

        <label for="importador">Importador:</label><br>
        <select name="operacion[importador]" id="importador" disabled><br>
                        <option><?php echo $operacion->getImportadores_id_importadores(); ?></option> 
        </select><br>

        <label for="buque">Buque:</label><br>
        <select name="operacion[buque]" id="buque" disabled><br>
                        <option><?php echo $operacion->getBuques_id_buques(); ?></option> 
        </select><br>

        <label for="recargo">Recargo:</label><br>
        <select name="operacion[recargo]" id="recargo" disabled><br>
                        <option><?php echo $operacion->getRecargos_id_recargos(); ?></option> 
        </select><br>

        </form>
        
</body>

</html>