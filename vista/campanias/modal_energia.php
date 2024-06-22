<div class="button-add-student">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalEnergia" data-bs-whatever="@mdo" style="width: 100px;">
        <i class="fa-solid fa-lightbulb"></i> Energia
    </button>
    <div class="modal fade" id="exampleModalEnergia" tabindex="-1" aria-labelledby="exampleModalEnergiaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalEnergiaLabel" style="text-align: center; width: 100%;">CALCULA - ENERGIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-stretch">
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6>Termino de potencia</h6>
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="precio_potencia_punta" class="col-form-label">Precio de Potencia Punta:</label>
                                        <input type="number" class="form-control text-center" id="precio_potencia_punta" name="precio_potencia_punta" style="margin-bottom: 5px;" value="<?php echo $termino_potencia1; ?>">
                                    </div>
                                    
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="precio_potencia_valle" class="col-form-label">Precio de Potencia Valle:</label>
                                        <input type="number" class="form-control text-center" id="precio_potencia_valle" name="precio_potencia_valle" style="margin-bottom: 5px;" value="<?php echo $termino_potencia2; ?>">
                                    </div>
                                    
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="precio_potencia_contratada" class="col-form-label">Precio de Potencia Contratada:</label>
                                        <input type="number" class="form-control text-center" id="precio_potencia_contratada" name="precio_potencia_contratada" style="margin-bottom: 5px;" value="<?php echo $Potencia_V; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6>Termino de Energia</h6>
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="kilovatio_ofrecido" class="col-form-label">Kilovatio q ofrecemos:</label>
                                        <input type="number" class="form-control text-center" id="kilovatio_ofrecido" name="kilovatio_ofrecido" style="margin-bottom: 5px;" value="<?php echo $termino_energia; ?>">
                                    </div>
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="consumo_cliente" class="col-form-label">Consumo del Cliente:</label>
                                        <input type="number" class="form-control text-center" id="consumo_cliente" name="consumo_cliente" style="margin-bottom: 5px;" value="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center" id="resultadoDiv" style="visibility: hidden;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Resultados:</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;">
                                                <label for="factura_sin_impuestos" class="col-form-label">Factura sin impuestos:</label>
                                                <input type="text" class="form-control text-center" id="factura_sin_impuestos" name="factura_sin_impuestos" style="margin-bottom: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;">
                                                <label for="factura_con_impuestos" class="col-form-label">Factura con Impuestos:</label>
                                                <input type="text" class="form-control text-center" id="factura_con_impuestos" name="factura_con_impuestos" style="margin-bottom: 5px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>