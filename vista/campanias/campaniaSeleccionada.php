<?php include '../../controlador/camapanias/campaniaSeleccionada.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora <?php echo htmlspecialchars($nombreCampaings); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/campaniaSeleccionada.css">
    <link rel="stylesheet" href="../css/modal_energia.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container" style="text-align: center;">
    <img src="../imagenes/logo_imfca.png" alt="Imfca logo" class="img-fluid" style="width: 150px;">
    <h2>Calculadora <?php echo htmlspecialchars($nombreCampaings); ?></h2>
    <?php 
        if (isset($mensaje_precios)) {
            echo "<p>$mensaje_precios</p>";
        }
        ?>
    <div class="row">
        <div class="col-md-6 d-flex justify-content-end">
            <?php 
            /* ------- MODAL CALCULAR ENERGIA---- */
            include './modal_energia.php'; 
            /* ---------------------------------------*/
            ?>
        </div>
        <div class="col-md-6 d-flex justify-content-start">
        <?php
            /* ------- MODAL CALCULAR GAS---- */
            include './modal_gas.php'; 
            /* ---------------------------------------*/
        ?>
        </div>
    </div>
</div>

<script src="../js/modal_energia.js"></script>
</body>
</html>
