<?php

use App\Operacion;

require 'includes/app.php';

$operaciones = Operacion::all();

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

    <div class="header">
        <h1>Welldex</h1>
    </div>

    <h1>Menu</h1>

    <div class="menu">
        <div class="menu-item amarillo">
            <a href="admin/registrar-operacion.php">Nueva operación</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-aduana.php">Registrar aduana</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-buque.php">Registrar buque</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-exportador.php">Registrar exportador</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-importador.php">Registrar importador</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-mercancia.php">Registrar mercancia</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-naviera.php">Registrar naviera</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-operador.php">Registrar operador</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-recargos.php">Registrar recargos</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-ruta.php">Registrar ruta</a>
        </div>
        <div class="menu-item">
            <a href="admin/registrar-terminal.php">Registrar terminal</a>
        </div>
    </div>

    <br>

    <div class="importaciones-buscar">
        <h1>Importaciones</h1>
        <a href="admin/buscar.php" class="boton">Buscar</a>
    </div>


    <table>
        <tr>
            <th>Referencia</th>
            <th>Cliente</th>
            <th>Estatus</th>
            <th>Flete</th>
            <th>Forma de pago</th>
            <th>Receptor</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($operaciones as $operacion) : ?>
            <tr>
                <td><?php echo $operacion->getReferencia(); ?></td>
                <td><?php echo $operacion->getCliente(); ?></td>
                <td>
                    <?php $estado = $operacion->getEstatus_id_estatus();
                    switch ($estado) {
                        case "1":
                            echo "Alta";
                            break;
                        case "2":
                            echo "En espera de zarpe";
                            break;
                        case "3":
                            echo "En trayecto";
                            break;
                        case "4":
                            echo "En atraque";
                            break;
                        case "5":
                            echo "En Descargo";
                            break;
                        case "6":
                            echo "En Descargada";
                            break;
                    }
                    ?>
                </td>
                <td><?php echo $operacion->getFlete(); ?></td>
                <td><?php echo $operacion->getFormaPago(); ?></td>
                <td><?php echo $operacion->getReceptor(); ?></td>
                <td>
                    <a href="admin/actualizar-estatus.php?id=<?php echo $operacion->getId_operacion(); ?>" class="boton">Actualizar estatus</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>