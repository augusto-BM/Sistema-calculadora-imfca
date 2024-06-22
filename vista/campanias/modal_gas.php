<div class="button-add-student">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalGas" data-bs-whatever="@mdo" style="width: 100px; color: white;">
    <i class="fa-solid fa-gas-pump"></i> Gas
    </button>
    <div class="modal fade" id="exampleModalGas" tabindex="-1" aria-labelledby="exampleModalGasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalGasLabel" style="text-align: center; width: 100%;">CALCULA - GAS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-stretch">
                        <div class="col-md-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="precio_potencia_punta_gas" class="col-form-label">Precio de Potencia Punta:</label>
                                        <input type="number" class="form-control text-center" id="precio_potencia_punta_gas" name="precio_potencia_punta_gas" style="margin-bottom: 5px;" value="<?php echo $termino_potencia1; ?>">
                                    </div>
                                    
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="precio_potencia_valle_gas" class="col-form-label">Precio de Potencia Valle:</label>
                                        <input type="number" class="form-control text-center" id="precio_potencia_valle_gas" name="precio_potencia_valle_gas" style="margin-bottom: 5px;" value="<?php echo $termino_potencia2; ?>">
                                    </div>
                                    
                                    <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 20px;">
                                        <label for="precio_potencia_contratada_gas" class="col-form-label">Precio de Potencia Contratada:</label>
                                        <input type="number" class="form-control text-center" id="precio_potencia_contratada_gas" name="precio_potencia_contratada_gas" style="margin-bottom: 5px;" value="<?php echo $Potencia_V; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center" id="resultadoDiv_gas" style="visibility: hidden;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6>Resultados:</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;">
                                                <label for="factura_sin_impuestos_gas" class="col-form-label">Factura sin impuestos:</label>
                                                <input type="text" class="form-control text-center" id="factura_sin_impuestos_gas" name="factura_sin_impuestos_gas" style="margin-bottom: 5px;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="precio-punta text-center" style="background-color:#CFE2FF; border: 1px solid #9ec5fe; margin-bottom: 5px;">
                                                <label for="factura_con_impuestos_gas" class="col-form-label">Factura con Impuestos:</label>
                                                <input type="text" class="form-control text-center" id="factura_con_impuestos_gas" name="factura_con_impuestos_gas" style="margin-bottom: 5px;">
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