<?php
    @include '../../modelo/conexion.php';
    session_start();

    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_campaña = $_POST["id_campaña"];
    $termino_potencia1 = $_POST["termino_potencia1"];
    $termino_potencia2 = $_POST["termino_potencia2"];
    $termino_energia = $_POST["termino_energia"];
    $Potencia_V = $_POST["Potencia_V"];
    $consumo_energia = $_POST["consumo_energia"];
    $termino_rl1 = $_POST["termino_rl1"];
    $termino_rl2 = $_POST["termino_rl2"];
    $termino_rl3 = $_POST["termino_rl3"];
    $tv1 = $_POST["tv1"];
    $tv2 = $_POST["tv2"];
    $tv3 = $_POST["tv3"];

    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql_precios = "INSERT INTO precios (id , termino_potencia1, termino_potencia2, termino_energia, Potencia_V, consumo_energia, termino_rl1, termino_rl2, termino_rl3, tv1, tv2, tv3) 
                VALUES ('$id_campaña','$termino_potencia1','$termino_potencia2','$termino_energia','$Potencia_V','$consumo_energia','$termino_rl1','$termino_rl2','$termino_rl3','$tv1','$tv2','$tv3')";
    $query = mysqli_query($conn, $sql_precios);

    // RECUPERAR NOMBRE DE LA CAMPAÑA PARA ENVIARLO POR MENSAJE DE SESSION
    $sql_campaings = "SELECT name FROM campaings WHERE id = $id_campaña";
    $resultado_campaings = mysqli_query($conn, $sql_campaings);

    // Verificar si hay resultados
    if (mysqli_num_rows($resultado_campaings) > 0) {
        while ($row_campaings = mysqli_fetch_assoc($resultado_campaings)) {
            $nombre_campaña = $row_campaings['name'];
        }
    } else {
        echo "No hay campañas disponibles.";
    }
        // Ejecutar la consulta y verificar si fue exitosa
        if ($query) {
        $_SESSION['mensaje'] = "Precio de la campaña ".$nombre_campaña. " registrado exitosamente";
            header("Location: ../../vista/administrador/principal.php");
        } else {
        $_SESSION['mensaje'] = "Error al registrar precio";
            header("Location: ../../vista/administrador/principal.php");
        }
    }
?>

