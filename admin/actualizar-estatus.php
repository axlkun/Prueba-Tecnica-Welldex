<?php
    require '../includes/app.php';

use App\Estatus;
use App\Operacion;

    $id = $_GET['id'];
    //$id = filter_var($id, FILTER_VALIDATE_INT);

    // Validamos que el ID por URL sea cualquier positivo entero
    if(!is_numeric($id)){               
        header('Location: /bienesraices/admin/index.php');
    }

    $operacion = Operacion::find($id);
    $estatus = Estatus::all();
    $estatusOperacion = $operacion->getEstatus_id_estatus();
    
    $_POST['operacion']['id_operacion'] = $operacion->getId_operacion();
    $_POST['operacion']['flete'] = $operacion->getFlete();
    $_POST['operacion']['formaPago'] = $operacion->getFormaPago();
    $_POST['operacion']['cliente'] = $operacion->getCliente();
    $_POST['operacion']['receptor'] = $operacion->getReceptor();
    $_POST['operacion']['numero_booking'] = $operacion->getNumero_booking();
    $_POST['operacion']['mercancia'] = $operacion->getMercancía_id_mercancia();
    $_POST['operacion']['terminal'] = $operacion->getTerminales_id_terminales();
    $_POST['operacion']['exportador'] = $operacion->getExportadores_id_exportadores();
    $_POST['operacion']['ruta'] = $operacion->getRutas_id_ruta();
    $_POST['operacion']['naviera'] = $operacion->getNaviera_id();
    $_POST['operacion']['operador'] = $operacion->getOperadores_id_operadores();
    $_POST['operacion']['importador'] = $operacion->getImportadores_id_importadores();
    $_POST['operacion']['buque'] = $operacion->getBuques_id_buques();
    $_POST['operacion']['recargo'] = $operacion->getRecargos_id_recargos();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //debuguear($_POST);
        $args = $_POST['operacion'];

        $operacion->sincronizar($args);

        $operacion->actualizar($id);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importaciones</title>
    <link rel="stylesheet" href="../src/css/style.css">
</head>
<body>

    <h1>Actualizar estatus</h1>
    <form method="POST">
        <label for="referencia">Folio o referencia:</label><br>
        <input type="text" id="referencia" name="operacion[referencia]" value="<?php echo $operacion->getReferencia(); ?>" readonly><br>



        <label for="estatus">Estatus:</label><br>
        <select name="operacion[estatus_id_estatus]" id="estatus"><br>
            <option value="" disabled selected>-- Seleccione una opción</option>
            <?php foreach($estatus as $stat): ?>
                <?php if(intval($stat->getId_estatus()) > intval($estatusOperacion) ): ?>
                        <option
                        
                            value="<?php echo $stat->getId_estatus(); ?>">
                            <?php echo $stat->getEstatus(); ?>
                        
                        </option>
                        <?php endif; ?>
                    <?php endforeach; ?>    
        </select><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>