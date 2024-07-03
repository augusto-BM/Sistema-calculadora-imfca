<div class="button-add-student">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalGas" data-bs-whatever="@mdo" style="width: 100px; color: white;">
        <i class="fa-solid fa-gas-pump"></i> Gas
    </button>
    <div class="modal fade" id="exampleModalGas" tabindex="-1" aria-labelledby="exampleModalGasLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalGasLabel" style="text-align: center; width: 100%;">CALCULA - GAS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-stretch">
                        <div class="col-md-7">
                            <div class="container-fluid h-100">
                                <div class="card-bodys">
                                    <fieldset>
                                        <legend>Lo que paga el cliente:</legend>
                                        <div class="container-fluid">
                                            <input class="text-center"" type=" text" value="0">
                                        </div>
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <legend>Calculo:</legend>
                                        <div class="container-fluid" id="formulario1">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2" class="subt_gas">TERMINO FIJO ( MES)</th>
                                                            <th colspan="1" class="subt_gas">CONSUMO</th>
                                                            <th colspan="1" class="subt_gas">TV</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="subt_gas">RL1:</th>
                                                            <td class="inputs"><input type="text" value="2.25" class="precios valor" id="precio_potencia_punta_gas" name="precio_potencia_punta_gas"></td>
                                                            <td class="inputs"><input type="text" value="0" class="precios valor" id="precio_consumo1_gas" name="precio_consumo1_gas"></td>
                                                            <td class="inputs"><input type="text" value="0.05" class="precios valor" id="precio_energia_punta_gas" name="precio_energia_punta_gas"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt_gas">RL2:</th>
                                                            <td class="inputs"><input type="text" value="5.07" class="precios valor" id="precio_potencia_valle_gas" name="precio_potencia_valle_gas"></td>
                                                            <td class="inputs"><input type="text" value="0" class="precios valor" id="precio_consumo2_gas" name="precio_consumo2_gas"></td>
                                                            <td class="inputs"><input type="text" value="0.05" class="precios valor" id="precio_energia_valle_gas" name="precio_energia_valle_gas"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt_gas">RL3:</th>
                                                            <td class="inputs"><input type="text" value="12.06" class="precios valor" id="precio_potencia_contratada_gas" name="precio_potencia_contratada_gas"></td>
                                                            <td class="inputs"><input type="text" value="0" class="precios valor" id="precio_consumo3_gas" name="precio_consumo3_gas"></td>
                                                            <td class="inputs"><input type="text" value="0.04" class="precios valor" id="precio_energia_contratada_gas" name="precio_energia_contratada_gas"></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" >
                            <div class="container-fluid h-100">
                                <div class="card-body">
                                    <br>
                                    <fieldset>
                                        <legend>Resultado: </legend>
                                        <br>
                                        <div class="container-fluid">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th class="subt_gas">SIN IMPUESTOS</th>
                                                            <th class="subt_gas">CON IMPUESTOS</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt_gas">Total</th>
                                                            <th class="subt_gas">21 %</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="resultado_gas" id="factura_con_impuestos" name="factura_con_impuestos" value="2.25" readonly></td>
                                                            <td><input type="text" class="resultado_gas" id="factura_con_impuestos" name="factura_con_impuestos" value="0.1125" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="resultado_gas" id="factura_con_impuestos" name="factura_con_impuestos" value="5.07" readonly></td>
                                                            <td><input type="text" class="resultado_gas" id="factura_con_impuestos" name="factura_con_impuestos" value="0.2535" readonly></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="resultado_gas" id="factura_con_impuestos" name="factura_con_impuestos" value="12.06" readonly></td>
                                                            <td><input type="text" class="resultado_gas" id="factura_con_impuestos" name="factura_con_impuestos" value="0.4824" readonly></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>