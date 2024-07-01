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
                                            <input type="text" name="dia" value="42" class="text-center dia">
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
                                                            <td class="inputs"><input type="text" value="0.1" class="precios valor"></td>
                                                            <td rowspan="2" class="align-middle"><input type="text" value="4.6" class="precios valor"></td>
                                                            <td class="valor">19.32</td>
                                                            <td rowspan="2" class="align-middle valor">25.116</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b class="subt">P2:</b></td>
                                                            <td><input type="text" value="0.03" class="precios valor"></td>
                                                            <td class="valor">5.796</td>
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
                                                            <td class="valor"><input type="text" value="0.114" class="precios valor"></td>
                                                            <td class="valor"><input type="text" value="100" class="precios valor"></td>
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
                                                            <td><input type="text" value="0" class="precios valor"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">P2</th>
                                                            <td><input type="text" value="0" class="precios valor"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">P3</th>
                                                            <td><input type="text" value="0" class="precios valor"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="subt">Total</th>
                                                            <td>0</td>
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
                                            <input type="text" value="0" class="text-center" style="width:70%; background-color: #65CD4A">
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
                                                        <tr>
                                                            <th class="valor"><i>TOTAL SIN IMPUESTO: </i> <label for="">12</label></th>
                                                            <th class="valor"><i>TOTAL CON IMPUESTO: </i><label for="">14</label></th>
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