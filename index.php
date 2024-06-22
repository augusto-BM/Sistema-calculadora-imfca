
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campañas</title>
    <!-- css - bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="./vista/css/index.css">

    <script src="./vista/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ---------------- HEADER ---------------- -->
    <?php @include './vista/componentes/header.php' ?>
    <!-- ---------------------------------------- -->

    <main>
        <div class="contenedor">
        <h1 class="titulo-principal">Campañas</h1>
        <div class="cards">
            <?php
            include './modelo/conexion.php';
            $sql_campaings = "SELECT * FROM campaings";

            $resultado_campaings = mysqli_query($conn, $sql_campaings);

            // Lista de colores predefinidos
            $colores = array('#af64f9', '#0081e3', '#5a23a2', '#00cc66', '#ff6666', '#9933ff', '#ffcc00', '#33ccff', '#00ff99');

            $index_color = 0;

            // Verificar si hay resultados
            if (mysqli_num_rows($resultado_campaings) > 0) {
                while ($row_campaings = mysqli_fetch_assoc($resultado_campaings)) {
                    $nombre_campaings = $row_campaings['name'];
                    $id_campaings = $row_campaings['id']; // ID de la campaña
                    $color_fondo = $colores[$index_color]; // Color del card segun indice

                    // Incrementar el índice del color 
                    $index_color = ($index_color + 1) % count($colores);

                    // Mostrar la tarjeta de la campaña
                    echo '<div class="card__items" style="background-color: ' . $color_fondo . ';" onclick="redirectToCampaña(' . $id_campaings . ', \'' . urlencode($nombre_campaings) . '\')">';
                        echo '<div class="card__background"></div>';
                            echo '<div class="card__empresas">';
                                echo '<span>' . $nombre_campaings . '</span>';
                            echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "No hay campañas disponibles.";
            }
            ?>
        </div>
        </div>
    </main>

    <!-- ---------------- FOOTER ---------------- -->
    <?php @include './vista/componentes/footer.php' ?>
    <!-- ---------------------------------------- -->

    <script src="./vista/js/index.js"></script>
</body>
</html>
