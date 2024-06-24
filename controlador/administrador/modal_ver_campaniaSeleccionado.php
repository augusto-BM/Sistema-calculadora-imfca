<?php
@include '../../modelo/conexion.php';

if (isset($_POST['click_btn_ver'])) {
    $id = $_POST['user_id'];
    //$sql = "SELECT * FROM fichaempleo WHERE id = '$id'";

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
            INNER JOIN
                precios ON campaings.id = precios.id
            WHERE campaings.id = '$id'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {

        while ($fila = mysqli_fetch_array($resultado)) {
?>
            <div>
                <style>
                    th {
                        text-align: center;
                        color: #2A2B2E !important;
                    }
                </style>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-info">
                                <th>Campaña:</th>
                                <th>Termino potencia 1:</th>
                                <th>Termino potencia 2:</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="name" id="name" class="form-control text-center" value="<?php echo  $fila['name'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="termino_potencia1" id="termino_potencia1" class="form-control text-center" value="<?php echo  $fila['termino_potencia1'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="termino_potencia2" id="termino_potencia2" class="form-control text-center" value="<?php echo  $fila['termino_potencia2'] ?>" readonly>
                                    </input>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-info">
                                <th>Termino energia:</th>
                                <th>Potencia V:</th>
                                <th>Consumo energia:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="termino_energia" id="termino_energia" class="form-control text-center" value="<?php echo  $fila['termino_energia'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="Potencia_V" id="Potencia_V" class="form-control text-center" value="<?php echo  $fila['Potencia_V'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="consumo_energia" id="consumo_energia" class="form-control text-center" value="<?php echo  $fila['consumo_energia'] ?>" readonly>
                                    </input>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-info">
                                <th>Termino rl1:</th>
                                <th>Termino rl2:</th>
                                <th>Termino rl3:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="termino_rl1" id="termino_rl1" class="form-control text-center" value="<?php echo  $fila['termino_rl1'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="termino_rl2" id="termino_rl2" class="form-control text-center" value="<?php echo  $fila['termino_rl2'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="termino_rl3" id="termino_rl3" class="form-control text-center" value="<?php echo  $fila['termino_rl3'] ?>" readonly>
                                    </input>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-info">
                                <th>Tv1:</th>
                                <th>Tv2:</th>
                                <th>Tv3:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input name="tv1" id="tv1" class="form-control text-center" value="<?php echo  $fila['tv1'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="tv2" id="tv2" class="form-control text-center" value="<?php echo  $fila['tv2'] ?>" readonly>
                                    </input>
                                </td>
                                <td>
                                    <input name="tv3" id="tv3" class="form-control text-center" value="<?php echo  $fila['tv3'] ?>" readonly>
                                    </input>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
<?php
        }
    }else {
        // Mostrar mensaje alternativo
        echo '<div class="alert alert-warning text-center" role="alert">La campaña no tiene precios asignados.</div>';
      }
}
?>