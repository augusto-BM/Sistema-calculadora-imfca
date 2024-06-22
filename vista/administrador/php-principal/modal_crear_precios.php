<div class="button-add-student">
  <button type="button" class="btn btn-success me-5" data-bs-toggle="modal" data-bs-target="#modalCrearPrecios" data-bs-whatever="@mdo"><i class="fas fa-building" style='color:#fff;'></i> Registrar Precios <i class="fa-solid fa-square-plus"></i></button>
  <div class="modal fade" id="modalCrearPrecios" tabindex="-1" aria-labelledby="modalCrearPreciosLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCrearPreciosLabel">Agregar Precio de Campaña</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="../../controlador/administrador/crear_campanias.php" enctype="multipart/form-data">
                <div class="container">
                  <div class="row">
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">Campaña:</label></div>
                      <select class="form-control" name="nombre_campaña" id="nombre_campaña" style="margin-bottom: 5px;">
                        <?php
                        if ($conn->connect_error) {
                          die("Conexión fallida: " . $conn->connect_error);
                        }

                        // Consulta para obtener los datos de los entrevistadores
                        $sql_nombreCampaña = "SELECT 
                            campaings.id AS id,
                            campaings.name AS name,
                            campaings.estado AS estado                               
                        FROM campaings
                        LEFT JOIN
                            precios ON campaings.id = precios.id
                        WHERE (precios.id IS NULL) AND (campaings.estado = 'activo')";

                        $resultado_nombreCampaña = mysqli_query($conn, $sql_nombreCampaña);
                        if ($resultado_nombreCampaña && mysqli_num_rows($resultado_nombreCampaña) > 0) {
                          while ($fila_nombreCapañana = mysqli_fetch_assoc($resultado_nombreCampaña)) {
                        ?>
                            <option value="<?php echo $fila_nombreCapañana['id']; ?>"><?php echo $fila_nombreCapañana['name']; ?></option>
                        <?php
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">termino potencia 1:</label></div>
                      <input type="text" class="form-control" id="termino_potencia1" name="termino_potencia1" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">termino potencia 2:</label></div>
                      <input type="text" class="form-control" id="termino_potencia2" name="termino_potencia2" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">termino energia:</label></div>
                      <input type="text" class="form-control" id="termino_energia" name="termino_energia" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">Potencia_V:</label></div>
                      <input type="text" class="form-control" id="Potencia_V" name="Potencia_V" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">consumo energia:</label></div>
                      <input type="text" class="form-control" id="consumo_energia" name="consumo_energia" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">termino_rl1:</label></div>
                      <input type="text" class="form-control" id="termino_rl1" name="termino_rl1" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                    <div class="col-3">
                      <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">termino_rl2:</label></div>
                      <input type="text" class="form-control" id="termino_rl2" name="termino_rl2" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-3">
                    <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">termino_rl3:</label></div>
                    <input type="text" class="form-control" id="termino_rl3" name="termino_rl3" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                  </div>
                  <div class="col-3">
                    <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">tv1:</label></div>
                    <input type="text" class="form-control" id="tv1" name="tv1" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                  </div>
                  <div class="col-3">
                    <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">tv2:</label></div>
                    <input type="text" class="form-control" id="tv2" name="tv2" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                  </div>
                  <div class="col-3">
                    <div class="nombre-empresa" style="text-align:center; background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;"><label for="recipient-name" class="col-form-label">tv3:</label></div>
                    <input type="text" class="form-control" id="tv3" name="tv3" style="margin-bottom: 5px;" oninput="soloLetras(this)" onkeyup="validarEmpresa(this);">
                  </div>
                </div>
                <br>
                <div class="modal-footer d-flex justify-content-center">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" name="submit" class="btn btn-success">Registrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>