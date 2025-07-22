<?php
include 'Mantenimientos/php.php';
// include 'navbar.php';
$inv = new Inventario();
// $empresaSeleccionada = isset($_POST['empresa']) ? $_POST['empresa'] : null;
// $equipos = $equipo->obtenerEquipos($empresaSeleccionada);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'nav.php'; ?>
    <!-- <div class="form-group">
        <form action="inventario.php" method=GET>
            <label for="empresa">Empresa</label>
            <select name="empresa" id="empresa" required>
                <option value="TODOS">TODOS</option>
                <option value="LITTLE CAESARS">LITTLE CAESARS</option>
                <option value="BURGER KING">BURGER KING</option>
                <option value="PRESTO CASH">PRESTO CASH</option>
                <option value="NISSAN">NISSAN</option>
                <option value="CHEVROLET">CHEVROLET</option>
                <option value="CADILLAC">CADILLAC</option>
                <option value="POLLO BRAVO">POLLO BRAVO</option>
                <option value="EXCELLENCE">EXCELLENCE</option>
                <option value="HIELO SARITA">HIELO SARITA</option>
                <option value="FINLOSA">FINLOSA</option>
                <option value="WINGSTOP">WINGSTOP</option>
                <option value="RESTAURANTES">RESTAURANTES</option>
                <option value="CAFETERIAS">CAFETERIAS</option>
            </select>
            <button>Buscar</button>
        </form>
    </div> -->

    <?php

    if (!isset($_GET['empresa'])) {
        $_GET['empresa'] = 'TODOS';
        $inv->obtenerEquipos($_GET['empresa']);

    } else {
        $inv->obtenerEquipos($_GET['empresa']);

    }

    ?>

</body>

</html>