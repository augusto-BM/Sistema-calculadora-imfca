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

                        <div class="container" id="formulario1">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="2">TERMINO FIJO ( MES)</th>
                                            <th colspan="1">CONSUMO</th>
                                            <th colspan="1">TV</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>RL1</th>
                                            <td>2.25</td>
                                            <td>0</td>
                                            <td>0.05</td>
                                        </tr>
                                        <tr>
                                            <th>RL2</th>
                                            <td>5.07</td>
                                            <td>0</td>
                                            <td>0.05</td>
                                        </tr>
                                        <tr>
                                            <th>RL3</th>
                                            <td>12.06</td>
                                            <td>0</td>
                                            <td>0.04</td>
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
                        <legend>Resultado: </legend>
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>SIN IMPUESTOS</th>
                                            <th>CON IMPUESTOS</th>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <th>21 %</th>
                                        </tr>
                                        <tr>
                                            <td>2.25</td>
                                            <td>0.1125</td>
                                        </tr>
                                        <tr>
                                            <td>5.07</td>
                                            <td>0.2535</td>
                                        </tr>
                                        <tr>
                                            <td>12.06</td>
                                            <td>0.4824</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Lo que paga el cliente:</legend>
                        <div class="conatiner">
                            <br>
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