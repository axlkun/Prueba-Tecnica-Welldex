<?php
require '../includes/app.php';

use App\Operacion;
use App\Aduana;
use App\Buque;
use App\Estatus;
use App\Exportador;
use App\Importador;
use App\Mercancia;
use App\Naviera;
use App\Operador;
use App\Recargos;
use App\Ruta;
use App\Terminal;

$aduanas = Aduana::all();
$buques = Buque::all();
$estatus = Estatus::all();
$exportadores = Exportador::all();
$importadores = Importador::all();
$mercancias = Mercancia::all();
$navieras = Naviera::all();
$operacion = new Operacion();
$operadores = Operador::all();
$recargos = Recargos::all();
$rutas = Ruta::all();
$terminales = Terminal::all();

//debuguear($mercancias);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $operacion = new Operacion($_POST['operacion']);
    //debuguear($_POST);
    $operacion->crear();
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
    <h1>Operacion</h1>
    <form method="POST">
        <label for="referencia">Folio o referencia:</label><br>
        <input type="number" id="referencia" name="operacion[referencia]"><br>

        <label for="flete">Flete:</label><br>
        <input type="number" id="flete" name="operacion[flete]"><br>

        <label for="formapago">Forma de pago:</label><br>
        <input type="text" id="formapago" name="operacion[formaPago]"><br>

        <label for="cliente">Cliente:</label><br>
        <input type="text" id="cliente" name="operacion[cliente]"><br>

        <label for="receptor">Receptor:</label><br>
        <input type="text" id="receptor" name="operacion[receptor]"><br>

        <label for="booking">Numero de booking:</label><br>
        <input type="text" id="booking" name="operacion[numero_booking]"><br>

        <label for="estatus">Estatus:</label><br>
        <select name="operacion[estatus_id_estatus]" id="estatus"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($estatus as $stat): ?>
                        <option 
                            value="<?php echo $stat->getId_estatus(); ?>">
                            <?php echo $stat->getEstatus();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="mercancia">Mercancía:</label> <a class="hipervinculo" href="registrar-mercancia.php" target="_blank">Registre la mercancía aquí</a>
        </div>
        <br>
        <select name="operacion[mercancia]" id="mercancia"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($mercancias as $merancia): ?>
                        <option 
                            value="<?php echo $merancia->getId_mercancia(); ?>">
                            <?php echo mb_substr($merancia->getDescripcion(), 0, 40, 'UTF-8') . "..."; ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="terminal">Terminal:</label> <a class="hipervinculo" href="registrar-terminal.php" target="_blank">Registre la terminal aquí</a>
        </div><br>
        <select name="operacion[terminal]" id="terminal"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($terminales as $terminal): ?>
                        <option 
                            value="<?php echo $terminal->getId_terminales(); ?>">
                            <?php echo $terminal->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="exportador">Exportador:</label> <a class="hipervinculo" href="registrar-exportador.php" target="_blank">Registre al exportador aquí</a>
        </div><br>
        <select name="operacion[exportador]" id="exportador"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($exportadores as $exportador): ?>
                        <option 
                            value="<?php echo $exportador->getId_exportadores(); ?>">
                            <?php echo $exportador->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="ruta">Ruta:</label> <a class="hipervinculo" href="registrar-ruta.php" target="_blank">Registre la ruta aquí</a>
        </div><br>
        <select name="operacion[ruta]" id="ruta"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($rutas as $ruta): ?>
                        <option 
                            value="<?php echo $ruta->getId_ruta(); ?>">
                            <?php echo $ruta->getId_ruta() . " " . $ruta->getPuertoEmbarque();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="naviera">Naviera:</label> <a class="hipervinculo" href="registrar-naviera.php" target="_blank">Registre la naviera aquí</a>
        </div><br>
        <select name="operacion[naviera]" id="naviera"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($navieras as $naviera): ?>
                        <option 
                            value="<?php echo $naviera->getId(); ?>">
                            <?php echo $naviera->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="operador">Operador:</label> <a class="hipervinculo" href="registrar-operador.php" target="_blank">Registre al operador aquí</a>
        </div><br>
        <select name="operacion[operador]" id="operador"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($operadores as $operador): ?>
                        <option 
                            value="<?php echo $operador->getId_operadores(); ?>">
                            <?php echo $operador->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="importador">Importador:</label> <a class="hipervinculo" href="registrar-importador.php" target="_blank">Registre al importador aquí</a>
        </div><br>
        <select name="operacion[importador]" id="importador"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($importadores as $importador): ?>
                        <option 
                            value="<?php echo $importador->getId_importadores(); ?>">
                            <?php echo $importador->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="buque">Buque:</label> <a class="hipervinculo" href="registrar-buque.php" target="_blank">Registre el buque aquí</a>
        </div><br>
        <select name="operacion[buque]" id="buque"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($buques as $buque): ?>
                        <option 
                            value="<?php echo $buque->getId_buques(); ?>">
                            <?php echo $buque->getNombre();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <div class="div-form">
        <label for="recargo">Recargos:</label> <a class="hipervinculo" href="registrar-recargo.php" target="_blank">Registre los recargos aquí</a>
        </div><br>
        <select name="operacion[recargo]" id="recargo"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($recargos as $recargo): ?>
                        <option 
                            value="<?php echo $recargo->getId_recargos(); ?>">
                            <?php echo mb_substr($recargo->getDescripcion(), 0, 40, 'UTF-8') . "... $" . $recargo->getMonto();  ?>
                        </option>
                    <?php endforeach; ?>    
        </select><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>