<?php
@include '../../modelo/conexion.php';

session_start();
//AL APRETAR EL BOTON DE EDITAR
if (isset($_POST['click_btn_editar'])) {

    $id = $_POST['user_id'];        //Obtener el id del usuario mediante  ajax    
    $array_datos_obtenidos = [];    //Array para almacenar los datos obtenidos de la base de datos  

    $sql = "SELECT 
                campaings.id AS id,
                campaings.name AS name,
                precios.termino_potencia1 AS termino_potencia1,   
                precios.termino_potencia2 AS termino_potencia2,
                precios.termino_energia AS termino_energia, 
                precios.Potencia_V AS Potencia_V, 
                precios.consumo_energia AS consumo_energia,
                precios.termino_rl1 AS termino_rl1,
                precios.termino_rl2 AS termino_rl2,
                precios.termino_rl3 AS termino_rl3,
                precios.tv1 AS tv1,
                precios.tv2 AS tv2,
                precios.tv3 AS tv3                         
            FROM campaings
            LEFT JOIN
                precios ON campaings.id = precios.id
            WHERE campaings.id = '$id'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_array($resultado)) {
            array_push($array_datos_obtenidos, $fila);
            header('Content-Type: application/json');
            echo json_encode($array_datos_obtenidos);
            exit;
        }
    }
}

//AL APRETAR EL BOTON DE GUARDAR CAMBIOS EN EL MODAL EDITAR
if (isset($_POST['click_btn_editar_cambios'])) {

    $id_campania = $_POST["id_campania"]; //Este es el input invisible que contiene el id de la campaña en el modal editar
    $name = $_POST["name"];
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


    // Preparar la consulta SQL para editar el nombre de la campaña
    // Actualizar campaings si es necesario (ejemplo)
    $sql_campaings = "UPDATE campaings SET
                        name = '$name'
                      WHERE id = '$id_campania'";

    // Actualizar precios basado en id_campania
    $sql_precios = "UPDATE precios SET
                        termino_potencia1 = '$termino_potencia1',
                        termino_potencia2 = '$termino_potencia2',
                        termino_energia = '$termino_energia',
                        Potencia_V = '$Potencia_V',
                        consumo_energia = '$consumo_energia',
                        termino_rl1 = '$termino_rl1',
                        termino_rl2 = '$termino_rl2',
                        termino_rl3 = '$termino_rl3',
                        tv1 = '$tv1',
                        tv2 = '$tv2',
                        tv3 = '$tv3'
                    WHERE id_precio IN (SELECT id_precio FROM campaings WHERE id = '$id_campania')";

    // Ejecutar las consultas
    if (mysqli_query($conn, $sql_campaings) && mysqli_query($conn, $sql_precios)) {
        $_SESSION['mensaje'] = "Datos actualizados correctamente";
        header("Location: ../../vista/administrador/principal.php");
    } else {
        $_SESSION['mensaje'] = "Error al actualizar los datos";
        header("Location: ../../vista/administrador/principal.php");
    }
}
mysqli_close($conn);
?>
