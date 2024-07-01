<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <style>
        .d-flex {
            display: flex;
            justify-content: center;
            /* Centrado horizontal */
            align-items: center;
            /* Centrado vertical */
        }

        .align-middle {
            vertical-align: middle !important;
            /* Asegura que el contenido de las celdas con rowspan se centre verticalmente */
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6;
            /* Borde de la tabla */
            text-align: center;
        }

        .table-info {
            background-color: #d1ecf1;
            /* Color de fondo de la fila de encabezado */
        }

        fieldset,
        legend {
            all: revert;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <fieldset>
                        <legend>Calculo:</legend>
                        <div>
                            <label for="">Dia</label>
                            <input type="text" value="42">
                        </div>
                        <div class="container" id="formulario1">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="5" class="table-info">TERMINO DE POTENCIA</th>
                                        </tr>
                                        <tr>
                                            <th colspan="2">TP</th>
                                            <th colspan="2"></th>
                                            <th colspan="2">RESULTADO DE TP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>P1</td>
                                            <td>0.1</td>
                                            <td rowspan="2" class="align-middle">4.6</td>
                                            <td>19.32</td>
                                            <td rowspan="2" class="align-middle">25.116</td>
                                        </tr>
                                        <tr>
                                            <td>P2</td>
                                            <td>0.03</td>
                                            <td>5.796</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container" id="formulario2">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="5" class="table-info">TERMINO ENERGIA</th>
                                        </tr>
                                        <tr>
                                            <th>TE</th>
                                            <th>LO QUE A CONSUMIDO</th>
                                            <th>RESULTADO TE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0.114</td>
                                            <td>100</td>
                                            <td>11.40</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>

                </div>


                <div class="col-md-6">
                    <fieldset>
                        <br>
                        <legend>Datos del cliente: </legend>
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>P1</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>P2</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>P3</th>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Total factura actual del cliente:</legend>
                        <div class="conatiner">
                            <br>
                            <label for="">Total</label>
                            <input type="text" value="0">
                        </div>
                        <br>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <fieldset>
                        <legend>Resultado:</legend>
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Total sin impuesto</th>
                                            <th>Total con impuesto</th>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>14</td>
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

</body>

</html>