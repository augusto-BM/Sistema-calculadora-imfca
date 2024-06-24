<?php
@include "../../modelo/conexion.php";
session_start();
if (!isset($_SESSION['nombre_sesion'])) {
    header('location:../login/login.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo $_SESSION['nombre_sesion']; ?></title>
    <link rel="icon" href="../../login/icono.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="./css-principal/modal_ver_y_editar.css"> <!-- Archivo CSS externo -->

    <link rel="stylesheet" href="./css-principal/principal.css">
    <link rel="stylesheet" href="./css-principal/sidebar.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="./js-principal/sidebar.js"></script>
    <script src="./js-principal/validarInputs.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <!-- SCRIPT AJAX - ESTADO DEL BOTON Y DE LA CAMPAÑA -->
    <script src="./js-principal/estadoBotonCampanias.js"></script>
    <!-- ----------------------------------------------------------- -->

    <!-- SCRIPT AJAX - VER INFORMACION DE CAMPAÑA SELECCIONADO -->
    <script src="./js-principal/verCampaniaSeleccionado.js"></script>
    <!-- ----------------------------------------------------------- -->

    <!-- SCRIPT AJAX - EDITAR INFORMACION DE UN POSTULANTE SELECCIONADO -->
    <script src="./js-principal/editarCampaniaSeleccionado.js"></script>
    <!-- -------------------------------------------------------------- -->
</head>

<body class="bg-content">

    <!-- EMPIEZA sidebar -->
    <?php @include './php-principal/sidebar.php' ?>
    <!-- FINALIZA sidebar -->
    <main class="dashboard d-flex">


        <!-- ------- MODAL PARA VER LA INFORMACION COMPLETA DE LA CAMPAÑA SELECCIONADO -->
        <?php @include './php-principal/modal_ver_campaniaSeleccionado.php' ?>
        <!-- -------------------------------------------------------------------------- -->

        <!-- ------ MODAL PARA EDITAR LA INFORMACION COMPLETA DE LA CAMPAÑA SELECCIONADO  ----->
        <?php @include './php-principal/modal_editar_campaniaSeleccionado.php' ?>
        <!-- -------------------------------------------------------------------------- -->


        <!-- EMPIEZA EL CONTENIDO PRINCIPAL -->
        <div class="container">

            <!-- --------- CARDS DE LAS INFO DE LAS EMPRESAS -------->
            <?php @include './php-principal/cards_empresas.php' ?>
            <!--  ------------------------------------------------ -->
            <div class="principal-contenedor">
                <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                    <div class="title h6 fw-bold">Lista de Campañas - <?php echo $_SESSION['nombre_sesion']; ?></div>

                    <div class="btn-add d-flex gap-3 align-items-center">

                        <!-- *** MODAL PARA CREAR CAMPAÑAS ***-->
                        <?php @include './php-principal/modal_crear_campanias.php' ?>
                        <!-- *************************************** -->

                        <!-- *** MODAL PARA CREAR PRECIOS ***-->
                        <?php @include './php-principal/modal_crear_precios.php' ?>
                        <!-- *************************************** -->
                    </div>
                </div>

                <!-- ***** MODAL DE ALERTA DE PROCESO EXITOSO USANDO SESSION Y SWEET ALERT2 ***** -->
                <?php @include './php-principal/modal_alerta_exitoso_conSession.php' ?>
                <!-- ************************************************************************** -->


                <div class="table-responsive col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <!-- Necesario Clase busqueda: tabla -->
                    <table class="table table-borderless table-striped tabla w-100" id="myTable">
                        <thead class="table-dark">
                            <style>
                                .centrado {
                                    text-align: center !important;
                                    vertical-align: middle !important;
                                    color: white !important;
                                }
                            </style>

                            <tr class="align-middle">
                                <th class="centrado" style="display: none;">ID</th>
                                <th class="centrado">Campaña</th>
                                <th> </th>
                                <th class="centrado">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../../modelo/conexion.php';

                            $sql = "SELECT id, name, estado FROM campaings";

                            $resultado = mysqli_query($conn, $sql);
                            if ($resultado && mysqli_num_rows($resultado) > 0) {
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                            ?>
                                    <tr class="bg-white align-middle centrado">
                                        <td class="user_id" style="display: none;"><?php echo $fila['id']; ?></td>
                                        <td class=""><?php echo $fila['name']; ?></td>
                                        <td class="">
                                            <a href="" class=" btn-ver me-0"><i class="far fa-eye" style="color: #2E59EA;"></i></a>
                                            <a href="" class="btn-editar ms-0"><i class="far fa-pen" style="color: #EAD42E;"></i></a>
                                        </td>
                                        <td>
                                            <button style="width: 100px;" class="btn <?php echo ($fila['estado'] == 'activo') ? 'btn-success' : 'btn-danger'; ?> estadoBtn" onclick="cambiarEstado(this)" data-id="<?php echo $fila['id']; ?>">
                                                <?php echo ($fila['estado'] == 'activo') ? 'Activo' : 'Inactivo'; ?>
                                            </button>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            mysqli_free_result($resultado);
                            mysqli_close($conn);

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- TERMINA EL CONTENIDO PRINCIPAL  -->
    </main>
</body>

</html>