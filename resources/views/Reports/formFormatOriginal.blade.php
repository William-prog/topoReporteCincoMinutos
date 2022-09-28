@extends('layouts.app')

@section('content')
<style>
</style>

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
                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportSchedule ) ? $reportEdit->reportSchedule :'' }}" name="reportSchedule">
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
                                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportAdvanceStart ) ? $reportEdit->reportAdvanceStart :'' }}" name="reportAdvanceStart">
                            </div>
                            <div class="form-group col">
                                <label for="">Fin:</label>
                                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportAdvanceEnd ) ? $reportEdit->reportAdvanceEnd :'' }}" name="reportAdvanceEnd">
                            </div>
                            <div class="form-group col">
                                <label for="">Total:</label>
                                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportAdvanceTotal ) ? $reportEdit->reportAdvanceTotal :'' }}" name="reportAdvanceTotal">
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
                                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportHorometerStart ) ? $reportEdit->reportHorometerStart :'' }}" name="reportHorometerStart">
                            </div>
                            <div class="form-group col">
                                <label for="">Fin:</label>
                                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportHorometerEnd ) ? $reportEdit->reportHorometerEnd :'' }}" name="reportHorometerEnd">
                            </div>
                            <div class="form-group col">
                                <label for="">Total:</label>
                                <input class="form-control" type="text" value="{{ isset ( $reportEdit->reportHorometerTotal ) ? $reportEdit->reportHorometerTotal :'' }}" name="reportHorometerTotal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    </style>

    <div class="d-flex justify-content-center align-items-center form-group">
        <a class="buttonHour">8:00 / 20:00</a>
        <a class="buttonHour">9:00 / 21:00</a>
        <a class="buttonHour">10:00 / 22:00</a>
        <a class="buttonHour">11:00 / 23:00</a>
        <a class="buttonHour">12:00 / 00:00</a>
        <a class="buttonHour">13:00 / 1:00</a>
        <a class="buttonHour">14:00 / 2:00</a>
        <a class="buttonHour">15:00 / 3:00</a>
        <a class="buttonHour">16:00 / 4:00</a>
        <a class="buttonHour">17:00 / 5:00</a>
        <a class="buttonHour">18:00 / 6:00</a>
        <a class="buttonHour">19:00 / 7:00</a>
        <a class="buttonHour">20:00 / 8:00</a>
    </div>

    <div class="row">
        <div class="col-sm-9">
            <div class="divForm">
                <div class="card-body">
                    <h5 class="card-title">Avance</h5>
                    <div class="row mt-2">
                        <div class="form-group col">
                            <label for="">Penetración [mm/paso]:</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group col">
                            <label for="">Presión de los cilindros:</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group col">
                            <label for="">Presión de empuje:</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="form-group col">
                            <label for="">Número de pasos total:</label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                    </div>

                    <style>
                        .form__radio-input {
                            display: none;
                        }

                        .form__label-radio {
                            font-size: 1rem;
                            cursor: pointer;
                            position: relative;
                        }

                        .form__radio-group {
                            margin-bottom: 4%;
                        }

                        .form__radio-button {
                            height: 2rem;
                            width: 2rem;
                            border: 5px solid #000;
                            background-color: #fff;
                            border-radius: 20%;
                            display: inline-block;
                            position: absolute;
                            left: 0;
                            top: -0.4rem;
                        }

                        .form__radio-button:hover {
                            height: 2rem;
                            width: 2rem;
                            border: 5px solid #FF771F;
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
                            height: 1rem;
                            width: 1rem;
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

                    <style>
                        .encabezado {
                            padding: 0px;
                            text-align: left;
                        }

                        .alingCheck {
                            padding: 0px;
                            margin-bottom: 0px;
                        }
                    </style>


                    <div class="container">
                        <input class="form-control col-md-4 light-table-filter" data-table="order-table" type="text" placeholder="Buscar actividad..">

                        <style>
                            .buttonSave:hover {
                                background-color: #FF771F;
                                text-decoration: bold;
                                color: #fff;
                            }
                        </style>

                        <input class="buttonSave form-control col-md-4 light-table-filter" type="submit" value="{{ $modo }}"> </input>
                        <hr>
                        <table class="table table-bordered order-table ">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="row mt-2">
                                            @include('Reports.listViewRadioButton.listEncabezado') 
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listExcabacion')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listAutoReset')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listRIT')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listLiberacion')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listCorreccionIR')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listInspeccionCHD')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listCambioCortador')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listBandaCadena')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listFallaElectrica')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listFallaMecanica')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listLevantamientoApron')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listMantenimientoProgramado')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listBloqueoAlimentadores')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listRevisionTolerancias')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listSoporteTerreno')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listBandaTunel')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listExtencionTuberia')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listExtencionCable')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listCassetteVentilacion')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listSuministrosAgua')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listFallaETG')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listAdelantamiento')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listGripper')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listeEmpalmeBanda')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listCambioTurno')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listTransporte')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listVoladura')
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="row mt-2">
                                        @include('Reports.listViewRadioButton.listOtros')
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div> <!-- /container -->
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="divForm">
                <h5 class="card-title">Posición</h5>
                <div class="divPosicion">
                    <div class="row mt-1">
                        <div class="form-group col">
                            <h5>Inicial</h5>
                        </div>
                        <div class="form-group col">
                            <label for="">Trasera:</label>
                        </div>
                        <div class="form-group col">
                            <label for="">Delantera:</label>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col">
                            <label for=""> Horizontal </label>
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col">
                            <label for=""> Vertical </label>
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col">
                            <label for=""> Paso / <br> Rodillo </label>
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="form-group col">
                            <label for=""> Desviación </label>
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                        <div class="form-group col">
                            <input class="form-control" type="text" name="">
                        </div>
                    </div>
                </div>
                <div class="row mt-1" style="text-align: right;">
                    <style>
                        .agregarPosicion {
                            background: #ffffff;
                            border: 5px solid #ff9900;
                            border-radius: 1000px;
                            padding: 10px 20px;
                            color: #000000;
                            display: inline-block;
                            font: normal bold 18px/1 "Calibri", sans-serif;
                            text-align: center;
                            text-decoration: none !important;
                            width: 50%;
                            cursor: pointer;
                        }

                        .agregarPosicion:hover {
                            color: #000;
                        }
                    </style>
                    <div class="form-group col">
                        <a class="agregarPosicion">Agregar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection