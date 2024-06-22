<?php
    if (isset($_POST['id_campaings'])) {
        $idCampaings = $_POST['id_campaings'];
        include '../../modelo/conexion.php';

        // Consultar el nombre de la campaña
        $sql_nombreCampaings = "SELECT name FROM campaings WHERE id = $idCampaings";
        $result_nombreCampaings = mysqli_query($conn, $sql_nombreCampaings);

        if ($result_nombreCampaings && mysqli_num_rows($result_nombreCampaings) > 0) {
            $row_nombreCampaings = mysqli_fetch_assoc($result_nombreCampaings);
            $nombreCampaings = $row_nombreCampaings['name'];
        } else {
            $nombreCampaings = "Nombre de campaña no encontrado";
        }

        // Consultar precios
        $sql_precios = "SELECT * FROM precios WHERE id = $idCampaings";
        $result_precios = mysqli_query($conn, $sql_precios);

        if ($result_precios && mysqli_num_rows($result_precios) > 0) {
            $row_precios = mysqli_fetch_assoc($result_precios);
            // Asignar valores de precios a variables, según sea necesario
            $termino_potencia1 = $row_precios['termino_potencia1'];
            $termino_potencia2 = $row_precios['termino_potencia2'];
            $termino_energia = $row_precios['termino_energia'];
            $Potencia_V = $row_precios['Potencia_V'];
            $consumo_energia = $row_precios['consumo_energia'];
            $termino_rl1 = $row_precios['termino_rl1'];
            $termino_rl2 = $row_precios['termino_rl2'];
            $termino_rl3 = $row_precios['termino_rl3'];
            $tv1 = $row_precios['tv1'];
            $tv2 = $row_precios['tv2'];
            $tv3 = $row_precios['tv3'];

        } else {
            $mensaje_precios = "No se encontraron precios para esta campaña.";
            // Otra lógica en caso de que no se encuentren precios
        }

    } else {
        echo "No se ha proporcionado el ID de la campaña.";
    }
?>