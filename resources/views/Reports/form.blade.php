@extends('layouts.app')

@section('content')

<div class="container">
    <div class="form-group">
        <!--  -->
        <!--  -->
        <!--  -->
        <!--  -->
        <div class="row mt-2">
            <div class="form-group col">
                <label for="">Fecha: </label>
                <input type="date" value="{{ isset ( $reportEdit->reportDate ) ? $reportEdit->reportDate:'' }}" name="reportDate" id="reportDate" class="form-control">
            </div>
            <div class="form-group col">

                <style>
                    .switch-title {
                        margin-bottom: 0.5em;
                    }

                    .switch-field input {
                        display: none;
                    }

                    .switch-field label {
                        float: left;
                    }

                    .switch-field label {
                        display: inline-block;
                        background-color: #efefef;
                        color: #333;
                        font-size: 1vw;
                        font-weight: normal;
                        text-align: center;
                        text-shadow: none;
                        padding: 0.5em 1em;
                        border: 0.05em solid rgba(0, 0, 0, 0.15);
                        -webkit-transition: all 0.1s ease-in-out;
                        -moz-transition: all 0.1s ease-in-out;
                        -ms-transition: all 0.1s ease-in-out;
                        -o-transition: all 0.1s ease-in-out;
                        transition: all 0.1s ease-in-out;
                    }

                    .switch-field label:hover {
                        cursor: pointer;
                    }

                    .switch-field input:checked+label {
                        background-color: #FF771F;
                        color: white;
                    }

                    .switch-field label:first-of-type {
                        border-radius: 3px 0 0 3px;
                        width: 50%;
                    }

                    .switch-field label:last-of-type {
                        border-radius: 0 3px 3px 0;
                        width: 50%;
                    }
                </style>

                <div class="form-group col">
                    <div class="switch-field">
                        <div class="switch-title">Turno:</div>
                        <input type="radio" id="switch_left" name="reportTurn" value="Dia" <?php if (isset($reportEdit->reportTurn)) {
                                                                                                if ($reportEdit->reportTurn == 'Dia') echo 'checked="checked"';
                                                                                            } ?> />
                        <label for="switch_left">Dia</label>
                        <input type="radio" id="switch_right" name="reportTurn" value="Noche" <?php if (isset($reportEdit->reportTurn)) {
                                                                                                    if ($reportEdit->reportTurn == 'Noche') echo 'checked="checked"';
                                                                                                } ?> />
                        <label for="switch_right">Noche</label>
                    </div>
                </div>

            </div>
            <div class="form-group col">
                <label for="">Horario: </label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccionar Horario</option>
                    <option value="1">08:00 - 20:00</option>
                    <option value="2">20:00 - 08:00</option>
                </select>
            </div>
        </div>

        <!--  -->
        <!--  -->

        <style>
            .card {
                background-color: #C4C4C4;
            }

            .card-title {
                text-align: center;
            }

            .divForm {
                background: rgba(100, 100, 100, 0.9);
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 10px;
                font-weight: bold;
                color: white;
            }

            .divPosicion {
                background: white;
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                border-radius: 5px;
                font-weight: bold;
                color: black;
                font-size: 15px;
            }
        </style>

        <div class="row">
            <div class="col-sm-6">
                <div class="divForm">
                    <div class="card-body">
                        <h5 class="card-title">Avance</h5>
                        <div class="row mt-2">
                            <div class="form-group col">
                                <label for="">Inicio:</label>
                                <input class="form-control" type="number" value="{{ isset ( $reportEdit->reportAdvanceStart ) ? $reportEdit->reportAdvanceStart :'' }}" name="reportAdvanceStart">
                            </div>
                            <div class="form-group col">
                                <label for="">Fin:</label>
                                <input class="form-control" type="number" value="{{ isset ( $reportEdit->reportAdvanceEnd ) ? $reportEdit->reportAdvanceEnd :'' }}" name="reportAdvanceEnd">
                            </div>
                            <div class="form-group col">
                                <label for="">Total:</label>
                                <input class="form-control" type="number" value="{{ isset ( $reportEdit->reportAdvanceTotal ) ? $reportEdit->reportAdvanceTotal :'' }}" name="reportAdvanceTotal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="divForm">
                    <div class="card-body">
                        <h5 class="card-title">MDM Horómetro</h5>
                        <div class="row mt-2">
                            <div class="form-group col">
                                <label for="">Inicio:</label>
                                <input class="form-control" type="number" value="{{ isset ( $reportEdit->reportHorometerStart ) ? $reportEdit->reportHorometerStart :'' }}" name="reportHorometerStart">
                            </div>
                            <div class="form-group col">
                                <label for="">Fin:</label>
                                <input class="form-control" type="number" value="{{ isset ( $reportEdit->reportHorometerEnd ) ? $reportEdit->reportHorometerEnd :'' }}" name="reportHorometerEnd">
                            </div>
                            <div class="form-group col">
                                <label for="">Total:</label>
                                <input class="form-control" type="number" value="{{ isset ( $reportEdit->reportHorometerTotal ) ? $reportEdit->reportHorometerTotal :'' }}" name="reportHorometerTotal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <label for="floatingTextarea">Observaciones</label>
        <textarea class="form-control" placeholder="Observaciones durante el turno" rows="5" id="floatingTextarea"></textarea>
        <!--  -->
        <!--  -->
    </div>

    <style>
        .buttonHour {
            text-align: center;
            font-family: Arial;
            color: #ffffff;
            font-size: 12px;
            padding: 5px;
            text-decoration: none !important;
            font-weight: bold;
            border-radius: 12px;
            border: solid #000000 3px;
            background-color: #FF771F;
            width: 90%;
            margin: 2px;
            cursor: pointer;
        }

        .buttonHour:hover {
            color: #000;
        }

        .tableTd {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        p {
            font-size: 15px;
            font-weight: bold;
            padding: 0px;
            margin: 0px;
        }
    </style>

    <style>
        .tablech {
            table-layout: fixed;
            width: 100%;
            *margin-left: -100px;
        }

        .tablech td,
        th {
            vertical-align: top;
            height: auto;
            text-align: left;
        }

        .tablech tr:hover {
            background-color: rgba(255, 119, 31, 0.9);
        }

        .orange {
            background-color: rgba(255, 119, 31, 0.9);
        }

        .black {
            background-color: rgba(114, 113, 112, 0.9)
        }

        .tablech th {
            position: absolute;
            left: 0;
            width: 23%;
            border: 1px solid;
            border-left-color: #fff;
            border-right-color: #fff;
            border-bottom-color: #FF771F;
            border-top-color: #fff;
        }

        .outer {
            position: relative
        }

        .inner {
            overflow-x: scroll;
            overflow-y: visible;
            width: auto;
            height: auto;
            margin-left: 23%;
        }

        .horario {
            width: 250px;
            border: 2px solid #000;
            text-align: center;
        }

        .borde {
            border: 2px solid;
            border-left-color: #000;
            border-right-color: #fff;
            border-bottom-color: #fff;
            border-top-color: #fff;
        }
    </style>

    <script type="text/javascript">
        (function(document) {
            'use strict';

            var LightTableFilter = (function(Arr) {

                var _input;

                function _onInputEvent(e) {
                    _input = e.target;
                    var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                    Arr.forEach.call(tables, function(table) {
                        Arr.forEach.call(table.tBodies, function(tbody) {
                            Arr.forEach.call(tbody.rows, _filter);
                        });
                    });
                }

                function _filter(row) {
                    var text = row.textContent.toLowerCase(),
                        val = _input.value.toLowerCase();
                    row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('light-table-filter');
                        Arr.forEach.call(inputs, function(input) {
                            input.oninput = _onInputEvent;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    LightTableFilter.init();
                }
            });

        })(document);
    </script>

    <div class="row">
        <div class="col-sm">
            <div class="row mt-2">
                <div class="form-group col">
                    <input class="form-control col-md light-table-filter" data-table="order-table" type="text" placeholder="Buscar actividad..">
                </div>
                <div class="form-group col">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Check List de Actividades
                    </button>
                </div>
                <div class="form-group col">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        Ver tiempos trabajados
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="outer">
                        <div class="inner">
                            <table class="tablech order-table">
                                <tr>
                                    <th style="text-align: center;"> Actividad </th>
                                    @include('Reports.tableViewRadioButton.listEncabezado')
                                </tr>
                                <tr>
                                    <th>Excavación</th>
                                    @include('Reports.tableViewRadioButton.listExcabacion')
                                </tr>
                                <tr>
                                    <th>Auto-reset</th>
                                    @include('Reports.tableViewRadioButton.listAutoReset')
                                </tr>
                                <tr>
                                    <th>Reunión de Inicio de Turno</th>
                                    @include('Reports.tableViewRadioButton.listRIT')
                                </tr>
                                <tr>
                                    <th>Liberación de Rampa</th>
                                    @include('Reports.tableViewRadioButton.listLiberacion')
                                </tr>
                                <tr>
                                    <th>Corrección Incl/Rod</th>
                                    @include('Reports.tableViewRadioButton.listCorreccionIR')
                                </tr>
                                <tr>
                                    <th>Inspección del CHD</th>
                                    @include('Reports.tableViewRadioButton.listInspeccionCHD')
                                </tr>
                                <tr>
                                    <th>Cambio de cortador</th>
                                    @include('Reports.tableViewRadioButton.listCambioCortador')
                                </tr>
                                <tr>
                                    <th>Banda de cadena</th>
                                    @include('Reports.tableViewRadioButton.listBandaCadena')
                                </tr>
                                <tr>
                                    <th>Falla Eléctrica</th>
                                    @include('Reports.tableViewRadioButton.listFallaElectrica')
                                </tr>
                                <tr>
                                    <th>Falla Mecánica</th>
                                    @include('Reports.tableViewRadioButton.listFallaMecanica')
                                </tr>
                                <tr>
                                    <th>Levantamiento del Apron</th>
                                    @include('Reports.tableViewRadioButton.listLevantamientoApron')
                                </tr>
                                <tr>
                                    <th>Mantenimiento Programado</th>
                                    @include('Reports.tableViewRadioButton.listMantenimientoProgramado')
                                </tr>
                                <tr>
                                    <th>Bloqueo de alimentadores</th>
                                    @include('Reports.tableViewRadioButton.listBloqueoAlimentadores')
                                </tr>
                                <tr>
                                    <th>Revisión de Tolerancias CHD</th>
                                    @include('Reports.tableViewRadioButton.listRevisionTolerancias')
                                </tr>
                                <tr>
                                    <th>Soporte de Terreno (Amacice)</th>
                                    <!-- <th>Soporte de Terreno (Amacice) <span class="badge bg-secondary">New</span> </th> -->
                                    @include('Reports.tableViewRadioButton.listSoporteTerreno')
                                </tr>
                                <tr>
                                    <th>Banda del Túnel</th>
                                    @include('Reports.tableViewRadioButton.listBandaTunel')
                                </tr>
                                <tr>
                                    <th>Extensión de Tubería</th>
                                    @include('Reports.tableViewRadioButton.listExtencionTuberia')
                                </tr>
                                <tr>
                                    <th>Extensión de Cable 13.2 Kv</th>
                                    @include('Reports.tableViewRadioButton.listExtencionCable')
                                </tr>
                                <tr>
                                    <th>Cassette de Ventilación</th>
                                    @include('Reports.tableViewRadioButton.listCassetteVentilacion')
                                </tr>
                                <tr>
                                    <th>Suministro de Agua</th>
                                    @include('Reports.tableViewRadioButton.listSuministrosAgua')
                                </tr>
                                <tr>
                                    <th>Falla ETG</th>
                                    @include('Reports.tableViewRadioButton.listFallaETG')
                                </tr>
                                <tr>
                                    <th>Adelantamiento ETG</th>
                                    @include('Reports.tableViewRadioButton.listAdelantamiento')
                                </tr>
                                <tr>
                                    <th>Gripper Trasero</th>
                                    @include('Reports.tableViewRadioButton.listGripper')
                                </tr>
                                <tr>
                                    <th>Empalme de Banda de Túnel</th>
                                    @include('Reports.tableViewRadioButton.listeEmpalmeBanda')
                                </tr>
                                <tr>
                                    <th>Cambio de Turno</th>
                                    @include('Reports.tableViewRadioButton.listCambioTurno')
                                </tr>
                                <tr>
                                    <th>Transporte</th>
                                    @include('Reports.tableViewRadioButton.listTransporte')
                                </tr>
                                <tr>
                                    <th>Voladura</th>
                                    @include('Reports.tableViewRadioButton.listVoladura')
                                </tr>
                                <tr>
                                    <th>Otros</th>
                                    @include('Reports.tableViewRadioButton.listOtros')
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Actividad
                        </div>
                        <div class="form-group col-2">
                            Tiempo
                        </div>
                        <div class="form-group col-7">
                            Progreso
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Excavación
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Auto-reset
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Reunión de Inicio de Turno
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Liberación de Rampa
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 7%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Corrección Incl/Rod
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 7%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Inspección del CHD
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Cambio de cortador
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 95%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Banda de cadena
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 25%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Falla Eléctrica
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 15%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Falla Mecánica
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 55%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Levantamiento del Apron
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Mantenimiento Programado
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 9%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Bloqueo de alimentadores
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Revisión de Tolerancias CHD
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 34%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Soporte de Terreno (Amacice)
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 41%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Banda del Túnel
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 31%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Extensión de Tubería
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 76%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Extensión de Cable 13.2 Kv
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 34%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Cassette de Ventilación
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 43%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Suministro de Agua
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 23%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Falla ETG
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 43%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Adelantamiento ETG
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Gripper Trasero
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 32%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Empalme de Banda de Túnel
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 12%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Cambio de Turno
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 32%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Transporte
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 63%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Voladura
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 23%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="form-group col-3">
                            Otros
                        </div>
                        <div class="form-group col-2">
                            <input class="form-control form-control-sm" type="number" value="123" name="reportAdvanceStart" disabled>
                        </div>
                        <div class="form-group col-7">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 4%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <br>


    <!-- INCIO DE TABLA -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

        .addBut {
            position: relative;
            display: inline-flex;
            width: 100px;
            height: 37px;
            margin: 0 15px;
            perspective: 10000px;
        }

        .addBut a {
            cursor: pointer;
            font-size: 19px;
            letter-spacing: 1px;
            transform-style: preserve-3d;
            transform: translateZ(-25px);
            transition: transform .25s;
            font-family: 'Montserrat', sans-serif;

        }

        .addBut a:before {
            position: absolute;
            content: "Agregar";
            height: 37px;
            width: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid #000;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .addBut a:after {
            position: absolute;
            content: "Posición";
            height: 37px;
            width: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 5px solid #FF771F;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .addBut a:before {
            color: #fff;
            background: #000;
            transform: rotateY(0deg) translateZ(25px);
        }

        .addBut a:after {
            color: #000;
            transform: rotateX(90deg) translateZ(25px);
        }

        .addBut a:hover {
            transform: translateZ(-25px) rotateX(-90deg);
        }
    </style>



    <div class="row mt-2">
        <div class="form-group col">
            <label for=""> Trasera Horizontal: </label>
            <input type="number" name="TrHorizontal_Form" id="TrHorizontal_Form" class="form-control">
        </div>
        <div class="form-group col">
            <label for=""> Trasera Vertical: </label>
            <input type="number" name="TrVertical_Form" id="TrVertical_Form" class="form-control">
        </div>
        <div class="form-group col">
            <label for=""> Trasera Paso/Rodillo: </label>
            <input type="number" name="TrPaso_Form" id="TrPaso_Form" class="form-control">
        </div>
    </div>
    <div class="row mt-2">
        <div class="form-group col">
            <label for=""> Delantera Horizontal: </label>
            <input type="number" name="DeHorizontal_Form" id="DeHorizontal_Form" class="form-control">
        </div>
        <div class="form-group col">
            <label for=""> Delantera Vertical: </label>
            <input type="number" name="DeVertical_Form" id="DeVertical_Form" class="form-control">
        </div>
        <div class="form-group col">
            <label for=""> Delantera Paso/Rodillo: </label>
            <input type="number" name="DePaso_Form" id="DePaso_Form" class="form-control">
        </div>
    </div>
    <div class="row mt-2">

        <div class="form-group col">
            <label for="">Desviacion: </label>
            <input type="number" name="Desviacion_Form" id="Desviacion_Form" class="form-control">
        </div>
    </div>
    <span class="addBut">
        <a id="addMore"></a>
    </span>
    <div class="row" style="margin-top:26px; text-align: center;">
        <style>
            label {
                font-weight: bold;
            }

            .tablePosicion {
                /* border-collapse: collapse; */
                box-shadow: 0 5px 10px #000;
                background-color: white;
                text-align: left;
                overflow: hidden;
                margin: auto;

            }

            .round_table {
                border-collapse: separate;
                border-spacing: 1;
                border: solid black 1px;
                border-radius: 5px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 5px;
            }

            .tablePosicion thead {
                box-shadow: 0 5px 10px #e1e5ee;
            }

            .tablePosicion th {
                padding: 1rem 0.5rem;
                text-transform: uppercase;
                letter-spacing: 0.1rem;
                font-size: 0.8rem;
                font-weight: 900;
            }

            .tablePosicion td {
                padding: 1rem 2rem;
            }

            .tablePosicion tr:nth-child(even) {
                background-color: #f4f6fb;
            }

            .tablePosicion tr:hover {
                background-color: rgba(255, 119, 31, 0.3);
            }
        </style>
        <table class="tablePosicion tabla round_table" style="width: 97%;">
            <thead>
                <tr>
                    <th style="">Tracera <br> Horizontal</th>
                    <th style="">Delantera <br> Horizontal</th>
                    <th style="">Tracera <br> Vertical</th>
                    <th style="">Delantera <br> Vertical</th>
                    <th style="">Tracera <br> Paso/Rodillo</th>
                    <th style="">Delantera <br> Paso/Rodillo</th>
                    <th style="">Desviacion</th>
                    <th style="">Eliminar</th>
                </tr>
            </thead>
            <tbody id="addRow" class="addRow">

            </tbody>
        </table>

        <div class="form">
            <div class="form-group">
                <div class="row mt-2">
                    <div class="form-group col">
                        <style>
                            .middle {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                            }

                            .btn {
                                position: relative;
                                display: block;
                                color: black;
                                font-size: 14px;
                                font-family: "montserrat";
                                text-decoration: none;
                                margin: 30px 0;
                                border: 2px solid black;
                                padding: 14px 60px;
                                text-transform: uppercase;
                                overflow: hidden;
                                transition: 1s all ease;
                            }

                            .btn::before {
                                background: #FF771F;
                                content: "";
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                z-index: -1;
                                transition: all 0.6s ease;
                            }

                            .btn1::before {
                                width: 0%;
                                height: 100%;
                            }

                            .btn1:hover::before {
                                width: 100%;
                            }
                        </style>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="middle">
                            <a style="cursor: pointer" class="btn btn1" data-toggle="modal" data-target="#menuModalSave">{{ __('Guardar Registro     ') }}<i class="fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>

    <script id="document-template" type="text/x-handlebars-template">
        <tr class="delete_add_more_item" id="delete_add_more_item">
      <td style="">
        <input type="text" class="form-control form-control-sm TrHorizontal" name="TrHorizontal[]" value="@{{ TrHorizontal }}" required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm TrVertical" name="TrVertical[]" value="@{{ TrVertical }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm TrPaso" name="TrPaso[]" value="@{{ TrPaso }}" required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm DeHorizontal" name="DeHorizontal[]" value="@{{ DeHorizontal }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm DeVertical" name="DeVertical[]" value="@{{ DeVertical }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm DePaso" name="DePaso[]" value="@{{ DePaso }}"  required>
      </td>
      <td>
        <input type="text" class="form-control form-control-sm Desviacion" name="Desviacion[]" value="@{{ Desviacion }}"  required>
      </td>

      <td>
       <i class="removeaddmore" style="cursor:pointer;color:red;font-weight: bold;">Eliminar</i>
      </td>
  </tr>
 </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $(document).on('click', '#addMore', function() {
            $('.tabla').show();
            var error = 0;
            var TrHorizontal = $("#TrHorizontal_Form").val();
            var DeHorizontal = $("#DeHorizontal_Form").val();
            var TrVertical = $("#TrVertical_Form").val();
            var DeVertical = $("#DeVertical_Form").val();
            var TrPaso = $("#TrPaso_Form").val();
            var DePaso = $("#DePaso_Form").val();
            var Desviacion = $("#Desviacion_Form").val();

            // console.log('> ' + recibeTurno);

            var source = $("#document-template").html();
            var template = Handlebars.compile(source);

            var data = {
                TrHorizontal: TrHorizontal,
                TrVertical: TrVertical,
                TrPaso: TrPaso,
                DeHorizontal: DeHorizontal,
                DeVertical: DeVertical,
                DePaso: DePaso,
                Desviacion: Desviacion
            }

            if (error == 1) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'LLena todos los campos',
                })
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Posición Agregada.',
                    showConfirmButton: false,
                    timer: 1500
                })
                var html = template(data);
                $("#addRow").append(html)
            }
        });

        $(document).on('click', '.removeaddmore', function(event) {
            $(this).closest('.delete_add_more_item').remove();
        });
    </script>
    <!-- FINAL DE TABLA -->

    <style>
        .form-group {
            margin-bottom: 1rem;
            font-weight: bold;
        }
    </style>



    <style>
        .form__radio-input {
            display: none;
        }

        .form__label-radio {
            font-size: 1.5rem;
            cursor: pointer;
            position: relative;
        }

        .form__radio-group {
            margin-bottom: 4%;
        }

        .form__radio-button {
            height: 1.5rem;
            width: 1rem;
            border: 2px solid #000;
            background-color: #fff;
            border-radius: 20%;
            display: inline-block;
            position: absolute;
            margin-top: 7px;
            left: 0;
            top: -0.4rem;
        }

        .form__radio-button:hover {
            height: 1.5rem;
            width: 1rem;
            border: 2px solid #FF771F;
            background-color: #fff;
            border-radius: 20%;
            display: inline-block;
            position: absolute;
            left: 0;
            top: -0.4rem;
        }

        .form__radio-button::after {
            content: "";
            display: block;
            height: 1.5rem;
            width: 1rem;
            border: 2px solid #000;
            border-radius: 20%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #FF771F;
            opacity: 0;
            transition: opacity 0.9s;
        }

        .form__radio-input:checked~.form__label-radio .form__radio-button::after {
            opacity: 1;
        }
    </style>

</div>
@endsection