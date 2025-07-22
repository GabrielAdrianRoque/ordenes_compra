<?php
if (isset($_POST['generar'])) {
    $sku = $_POST['sku'];
    $cantidad = (int) $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $precio_unitario = $_POST['precio_unitario'];

    print_r($sku);
    print_r($cantidad);
    print_r($descripcion);
    print_r($precio_unitario);

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ordenes de Compra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="GI.png">

</head>

<body class="body_orden_compra">
    <?php include 'nav.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

    <form action="OrdenesCompraFinlosa/orden_compra_test_doc.php" method="POST" enctype="multipart/form-data"
        class="form">
        <button type="button" class="btn btn-success form-control" value="Anadir Producto"
            onclick="añadirCampo()">Añadir mas productos
        </button>
        <div class="container mt-3">
            <center>
                <h3>Introduce los datos para general la orden de compra</h3>
            </center>
            <br>

            <div class="row align-items-center">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label for="empresa" class="col-form-label">Empresa</label>
                    </div>
                    <div class="col">
                        <select name="empresa" id="empresa" class="form-control" required>
                            <option value="COPPIZA">COPPIZA</option>
                            <option value="BURGER KING">BURGER KING</option>
                            <option value="PRESTO CASH">PRESTO CASH</option>
                            <option value="NISSAN MATRIZ">NISSAN MATRIZ</option>
                            <option value="NISSAN MORELOS">NISSAN MORELOS</option>
                            <option value="NISSAN NUEVO LAREDO">NISSAN NUEVO LAREDO</option>

                            <option value="CHEVROLET REYNOSA">CHEVROLET REYNOSA MORELOS</option>
                            <option value="CHEVROLET SAN FERNANDO">CHEVROLET SAN FERNANDO</option>
                            <option value="CHEVROLET GOODWRENCH">CHEVROLET GOODWRENCH</option>
                            <option value="CHEVROLET MATAMOROS">CHEVROLET MATAMOROS</option>
                            <option value="CHEVROLET MIGUEL ALEMAN">CHEVROLET MIGUEL ALEMAN</option>
                            <option value="CHEVROLET RIO BRAVO">CHEVROLET RIO BRAVO</option>
                            <option value="E-FIRMA">E-FIRMA</option>
                            




                            <option value="CADILLAC">CADILLAC</option>
                            <option value="POLLO BRAVO">POLLO BRAVO</option>
                            <option value="EXCELLENCE">EXCELLENCE</option>
                            <option value="HIELO SARITA REYNOSA">HIELO SARITA REYNOSA</option>
                            <option value="HIELO SARITA NUEVO LAREDO">HIELO SARITA NUEVO LAREDO</option>
                            <option value="ITSA">ITSA</option>
                            <option value="ALTERNATIVA INMOBILIARIA">ALTERNATIVA INMOBILIARIA</option>
                            <option value="FINLOSA">FINLOSA</option>
                            <option value="WINGSTOP">WINGSTOP</option>
                            <option value="RESTAURANTES">RESTAURANTES</option>
                            <option value="INLOSA CAFETERIAS">INLOSA CAFETERIAS</option>
                            <option value="FIREHOUSE">FIREHOUSE</option>

                            <!-- Más opciones aquí -->
                        </select>
                    </div>

                    <div class="col-auto">
                        <label for="proveedor" class="col-form-label">Proveedor</label>
                    </div>
                    <div class="col">
                        <select name="proveedor" id="proveedor" class="form-control" required>
                            <option value="FINLOSA">FINLOSA</option>
                            <option value="ABASTEO">ABASTEO</option>
                            <option value="PCEL">PCEL</option>
                            <option value="MICROSISTEMAS">MICROSISTEMAS</option>
                            <option value="SYSCOM">SYSCOM</option>
                            <option value="OFFICE DEPOT">OFFICE DEPOT</option>
                            <option value="E-FIRMA">E-FIRMA</option>

                            

                        </select>
                    </div>

                    <div class="col-auto">
                        <label for="fecha" class="col-form-label">Fecha</label>
                    </div>
                    <div class="col">
                        <input type="date" id="inputFecha" name="fecha" class="form-control">
                    </div>
                    <div class="col-auto">
                        <label for="precio_envio" class="col-form-label">Precio de Envio</label>
                    </div>
                    <div class="col">
                        <input type="number" step="0.01" name="precio_envio" class="form-control">
                    </div>
                    <div class="col-auto">
                        <label for="cantidad_envios" class="col-form-label"># Envios</label>
                    </div>
                    <div class="col">
                        <input type="number" step="0.01" name="cantidad_envios" class="form-control">
                    </div>
                    <div class="col-auto">
                        <label for="cantidad_envios" class="col-form-label">IVA</label>
                    </div>
                    <div class="col">
                        <select name="iva" id="iva" class="form-control" required>
                            
                            <option value="0.16">16%</option>
                            <option value="0.08">8%</option>
                            <option value="0.00">SIN IVA</option>

                        </select>
                    </div>
                </div>

                <div class="row align-items-center mt-2">
                    <div class="col-auto">
                        <label for="sku" class="col-form-label">SKU</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputSku" name="sku[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="cantidad" class="col-form-label">Cantidad</label>
                    </div>
                    <div class="col">
                        <input type="number" id="inputCantidad" name="cantidad[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="descripcion" class="col-form-label">Descripción</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputDescripcion" name="descripcion[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="precio" class="col-form-label">Precio Unitario</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" step="0.01" name="precio_unitario[]" class="form-control">
                    </div>

                </div>

                                <div class="row align-items-center mt-2">
                    <div class="col-auto">
                        <label for="sku" class="col-form-label">SKU</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputSku" name="sku[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="cantidad" class="col-form-label">Cantidad</label>
                    </div>
                    <div class="col">
                        <input type="number" id="inputCantidad" name="cantidad[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="descripcion" class="col-form-label">Descripción</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputDescripcion" name="descripcion[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="precio" class="col-form-label">Precio Unitario</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" step="0.01" name="precio_unitario[]" class="form-control">
                    </div>

                </div>

                                <div class="row align-items-center mt-2" >
                    <div class="col-auto">
                        <label for="sku" class="col-form-label">SKU</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputSku" name="sku[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="cantidad" class="col-form-label">Cantidad</label>
                    </div>
                    <div class="col">
                        <input type="number" id="inputCantidad" name="cantidad[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="descripcion" class="col-form-label">Descripción</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputDescripcion" name="descripcion[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="precio" class="col-form-label">Precio Unitario</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" step="0.01" name="precio_unitario[]" class="form-control">
                    </div>

                </div>

                                <div class="row align-items-center mt-2" id="info_producto">
                    <div class="col-auto">
                        <label for="sku" class="col-form-label">SKU</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputSku" name="sku[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="cantidad" class="col-form-label">Cantidad</label>
                    </div>
                    <div class="col">
                        <input type="number" id="inputCantidad" name="cantidad[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="descripcion" class="col-form-label">Descripción</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputDescripcion" name="descripcion[]" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="precio" class="col-form-label">Precio Unitario</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" step="0.01" name="precio_unitario[]" class="form-control">
                    </div>

                </div>



                <div class="row align-items-center mt-2">
                    <div class="col-auto">
                        <label for="comentario" class="col-form-label">Comentario</label>
                    </div>
                    <div class="col">
                        <textarea class="form-control" id="inputTextArea" name="comentario" rows="3"></textarea>
                    </div>
                </div>
                <div class="row align-items-center mt-2">
                    <div class="col-auto">
                        <label for="comentario" class="col-form-label">Subir imagen</label>
                    </div>
                    <div class="col">
                        <input type="file" class="form-control" id="inputImg" name="imagen">
                    </div>
                </div>

                <div class="row align-items-center mt-2">
                    <div class="col-auto">
                        <label for="elaboro" class="col-form-label">¿Quién elaboró?</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputElaboro" name="elaboro" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="solicitante" class="col-form-label">Solicitante</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputSolicitante" name="solicitante" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="autoriza" class="col-form-label">¿Quién autoriza?</label>
                    </div>
                    <div class="col">
                        <input type="text" id="inputAutoriza" name="autoriza" class="form-control">
                    </div>
                </div>

            </div>
            <div class="row align-items-center mt-2">
                <div class="col">
                    <button class="btn btn-success form-control" name="generar" value="Generar">Generar</button>
                </div>
            </div>

            <script>
                function añadirCampo() {
                    const contenedor = document.getElementById('info_producto');
                    const nuevoCampo = document.createElement('div');
                    nuevoCampo.classList.add('input-group');
                    nuevoCampo.innerHTML =


                        `<div class = "row align-items-center mt-2">
        <div class="col-auto">
          <label for="sku" class="col-form-label">SKU</label>
        </div>
        <div class="col">
          <input type="text" name="sku[]" class="form-control">
        </div>

        <div class="col-auto">
          <label for="cantidad" class="col-form-label">Cantidad</label>
        </div>
        <div class="col">
          <input type="number" name="cantidad[]" class="form-control">
        </div>

        <div class="col-auto">
          <label for="descripcion" class="col-form-label">Descripción</label>
        </div>
        <div class="col">
          <input type="text" name="descripcion[]" class="form-control">
        </div>

        <div class="col-auto">
          <label for="precio" class="col-form-label">Precio Unitario</label>
        </div>
        <div class="col">
          <input type="number" step="0.01" name="precio_unitario[]" class="form-control">
        </div>
        </div>`;

                    contenedor.appendChild(nuevoCampo);
                }
            </script>


</body>

</html>