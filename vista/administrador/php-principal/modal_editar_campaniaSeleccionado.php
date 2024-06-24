<div class="modal fade" id="editar_info_campania" tabindex="-1" aria-labelledby="editar_info_campaniaLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title fs-5" id="editar_info_campaniaLabel">Editar Información de la Campaña</h5>

                <button type="button" class="btn-close position-absolute end-0 me-3" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="POST" action="../../controlador/administrador/modal_editar_campaniaSeleccionado.php">
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <input type="hidden" id="campaniaId" name="id_campania">
                            <div>
                                <style>
                                    th {
                                        text-align: center;
                                        color: #2A2B2E !important;
                                        font-size: 14px !important;
                                    }

                                    input {
                                        height: 25px;
                                        font-size: 15px !important;
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
                                                    <input name="name" id="name" class="form-control text-center" value="<?php echo  $fila['name'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="termino_potencia1" id="termino_potencia1" class="form-control text-center" value="<?php echo  $fila['termino_potencia1'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="termino_potencia2" id="termino_potencia2" class="form-control text-center" value="<?php echo  $fila['termino_potencia2'] ?>">
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
                                                    <input name="termino_energia" id="termino_energia" class="form-control text-center" value="<?php echo  $fila['termino_energia'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="Potencia_V" id="Potencia_V" class="form-control text-center" value="<?php echo  $fila['Potencia_V'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="consumo_energia" id="consumo_energia" class="form-control text-center" value="<?php echo  $fila['consumo_energia'] ?>">
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
                                                    <input name="termino_rl1" id="termino_rl1" class="form-control text-center" value="<?php echo  $fila['termino_rl1'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="termino_rl2" id="termino_rl2" class="form-control text-center" value="<?php echo  $fila['termino_rl2'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="termino_rl3" id="termino_rl3" class="form-control text-center" value="<?php echo  $fila['termino_rl3'] ?>">
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
                                                    <input name="tv1" id="tv1" class="form-control text-center" value="<?php echo  $fila['tv1'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="tv2" id="tv2" class="form-control text-center" value="<?php echo  $fila['tv2'] ?>">
                                                    </input>
                                                </td>
                                                <td>
                                                    <input name="tv3" id="tv3" class="form-control text-center" value="<?php echo  $fila['tv3'] ?>">
                                                    </input>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success" name="click_btn_editar_cambios">Guardar Cambios</button>
                </div>
            </form>

        </div>
    </div>
</div>