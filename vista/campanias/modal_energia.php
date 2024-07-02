<div class="button-add-student">
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalEnergia" data-bs-whatever="@mdo" style="width: 100px;">
        <i class="fa-solid fa-lightbulb"></i> Energia
    </button>
    <div class="modal fade" id="exampleModalEnergia" tabindex="-1" aria-labelledby="exampleModalEnergiaLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalEnergiaLabel" style="text-align: center; width: 100%;">CALCULA - ENERGIA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-stretch">
                        <div class="col-md-8">
                            <div class="container-fluid h-100">
                                <div class="card-bodys">
                                    <fieldset>
                                        <legend>Calculo:</legend>
                                        <div class="text-start" style="margin-left: 30px; margin-bottom:10px">
                                            <label for="dia"><b>DIA</b></label>
                                            <input type="text" value="30" class="text-center dia" id="dia" name="dia">
                                        </div>
                                        <div class="container-fluid" id="formulario1">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="6" class="termino">TERMINO DE POTENCIA</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2" class="subt">TP</th>
                                                            <th colspan="2"></th>
                                                            <th colspan="2" class="subt">RESULTADO TP</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><b class="subt">P1:</b></td>
                                                            <td class="inputs"><input type="text" value="0.1" class="precios valor" id="precio_potencia_punta" name="precio_potencia_punta"></td>
                                                            <td rowspan="2" class="align-middle"><input type="text" value="4.6" class="precios valor" id="precio_potencia_contratada" name="precio_potencia_contratada"></td>
                                                            <td class=""><input type="text" value="19.32" class="mostrar" readonly ></td>
                                                            <td rowspan="2" class="align-middle valor"><input type="text" value="25.116" class="mostrar" readonly ></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b class="subt">P2:</b></td>
                                                            <td><input type="text" value="0.03" class="precios valor" id="precio_potencia_valle" name="precio_potencia_valle"></td>
                                                            <td class=""><input type="text" value="5.796" class="mostrar" readonly ></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="container-fluid" id="formulario2">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="4" class="termino">TERMINO ENERGIA</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">TE</th>
                                                            <th class="subt">LO QUE A CONSUMIDO</th>
                                                            <th class="subt">RESULTADO TE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="valor"><input type="text" value="0.114" class="precios valor" id="kilovatio_ofrecido" name="kilovatio_ofrecido"></td>
                                                            <td class="valor"><input type="text" value="100" class="precios valor" id="consumo_cliente" name="consumo_cliente"></td>
                                                            <td class="valor">11.40</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container-fluid h-100">
                                <div class="card-body">
                                    <fieldset>
                                        <legend>Datos del cliente: </legend>
                                        <div class="container-fluid">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th class="subt">P1</th>
                                                            <td><input type="text" class="precios valor" id="cliente_p1" name="cliente_p1"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">P2</th>
                                                            <td><input type="text" class="precios valor" id="cliente_p2" name="cliente_p2"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">P3</th>
                                                            <td><input type="text" class="precios valor" id="cliente_p3" name="cliente_p3"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">Total</th>
                                                            <td><input type="text" class="cliente_totalp" id="cliente_totalp" name="cliente_totalp" readonly></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <br>
                                    <fieldset>
                                        <legend>Factura actual:</legend>
                                        <div class="conatiner">
                                            <label for="" class=""><b>Total</b></label><br>
                                            <input type="text" value="0" class="text-center" style="width:70%; background-color: #65CD4A; letter-spacing: 1px; font-family: Verdana, Geneva, Tahoma, sans-serif;">
                                        </div>
                                        <br>
                                    </fieldset>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center" id="resultadoDiv" style="visibility: hidden;">
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="card-body">
                                    <fieldset>
                                        <legend>Resultado:</legend>
                                        <div class="container-fluid">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr class="">
                                                            <th class="th_resultado"><i>TOTAL SIN IMPUESTO: </i><input type="text" class="resultado_factura_sin_impuestos" id="factura_sin_impuestos" name="factura_sin_impuestos" readonly></th>
                                                            <th class="th_resultado"><i>TOTAL CON IMPUESTO: </i><input type="text" class="resultado_factura_con_impuestos" id="factura_con_impuestos" name="factura_con_impuestos" readonly></th>
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