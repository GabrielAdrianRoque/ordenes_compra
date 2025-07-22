<?php
include 'Mantenimientos/php.php';
$enviar = new Inventario();

if (isset($_POST['enviar'])) {
    $enviar->Anadir(
        $_POST['empresa'],
        $_POST['services_tag_cpu'],
        $_POST['services_tag_monitor'],
        $_POST['modelo'],
        $_POST['area'],
        $_POST['usuario'],
        $_POST['ram'],
        $_POST['procesador'],
        $_POST['categoria_disco_duro'],
        $_POST['disco_duro_capacidad'],
        $_POST['disco_duro_porcentaje'],
        $_POST['comentario']
    );
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Equipos</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">

<?php include 'nav.php';  ?>
    <!-- FIN BOOTSTRAP -->
</head>

<body>
    <!-- <div class="form-container"> -->
        <form action="mantenimientos.php" method="POST" class="form">
        <h2 class="text-center">Registrar el equipo</h2>

            <!-- Primera fila -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="empresa">Empresa</label>
                        <select name="empresa" id="empresa" class="form-control" required>
                            <option value="COPPIZA">COPPIZA</option>
                            <option value="BURGER KING">BURGER KING</option>
                            <option value="PRESTO CASH">PRESTO CASH</option>
                            <option value="NISSAN MATRIZ">NISSAN MATRIZ</option>
                            <option value="NISSAN MORELOS">NISSAN MORELOS</option>
                            <option value="NISSAN NUEVO LAREDO">NISSAN NUEVO LAREDO</option>

                            <option value="CHEVROLET">CHEVROLET REYNOSA MORELOS</option>
                            <option value="CHEVROLET">CHEVROLET SAN FERNANDO</option>

                            <option value="CADILLAC">CADILLAC</option>
                            <option value="POLLO BRAVO">POLLO BRAVO</option>
                            <option value="EXCELLENCE">EXCELLENCE</option>
                            <option value="HIELO SARITA REYNOSA">HIELO SARITA REYNOSA</option>
                            <option value="HIELO SARITA NUEVO LAREDO">HIELO SARITA NUEVO LAREDO</option>

                            <option value="FINLOSA">FINLOSA</option>
                            <option value="WINGSTOP">WINGSTOP</option>
                            <option value="RESTAURANTES">RESTAURANTES</option>
                            <option value="CAFETERIAS">CAFETERIAS</option>
                            <!-- Más opciones aquí -->
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="area">Área</label>
                        <input type="text" id="area" name="area" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="services_tag_cpu">Service Tag CPU</label>
                        <input type="text" id="services_tag_cpu" name="services_tag_cpu" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Segunda fila -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="services_tag_monitor">Service Tag MONITOR</label>
                        <input type="text" id="services_tag_monitor" name="services_tag_monitor" class="form-control"
                            required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" id="modelo" name="modelo" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="usuario">Nombre del Empleado</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>
                </div>
            </div>

            <!-- Tercera fila -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ram">RAM (GB)</label>
                        <input type="number" id="ram" name="ram" class="form-control" min="1" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="procesador">Procesador</label>
                        <input type="text" id="procesador" name="procesador" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="categoria_disco_duro">Categoría del Disco Duro</label>
                        <select name="categoria_disco_duro" id="categoria_disco_duro" class="form-control" required>
                            <option value="SSD">SSD</option>
                            <option value="HDD">HDD</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Cuarta fila -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="disco_duro_capacidad">Disco Duro (GB)</label>
                        <input type="number" id="disco_duro_capacidad" name="disco_duro_capacidad" class="form-control"
                            min="1" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="disco_duro_porcentaje">Disco Duro (%)</label>
                        <input type="number" id="disco_duro_porcentaje" name="disco_duro_porcentaje"
                            class="form-control" min="1" required>
                    </div>
                </div>
            </div>

            <!-- Última fila -->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                        <textarea name="comentario" id="comentario" class="form-control"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" name="enviar" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </form>
    <!-- </div> -->
</body>

</html>