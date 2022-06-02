<?php

use yii\helpers\Html;


?>

<div class="container">
    <h1>Encabezado de Pedido</h1>
    <div style="margin-top: 20px;">
        <button type="button" class="btn btn-primary">Actualizar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
    </div>
    <div style="margin-top: 20px;">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td style="font-weight: bold;">Número de Pedido:</td>
                    <td>68</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Fecha del Pedido:</td>
                    <td>2022-05-19</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Área Solicitante</td>
                    <td>Restaurante</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Empleado Solicitante</td>
                    <td>Eduardo</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Empleado que Recibirá</td>
                    <td>Flora</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Estatus:</td>
                    <td>Pendiente</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Descripción:</td>
                    <td>Pedido que no cuenta con materia prima asignada.</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Empleado que Autoriza</td>
                    <td>Victor Manuel</td>
                </tr>
                <tr>
                    <td style="font-weight: bold;">Fecha Aproximada de Entrega</td>
                    <td>2022-05-11</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <button id="add-mp" type="button" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
            <span>Agregar Materia Prima al Pedido</span>
        </button>
        <button type="button" class="btn btn-primary">Imprimir Pedido</button>
    </div>
    <div id="mp-form" style="margin-top: 30px; display: none;">
        <div style="display: flex; width: 100%; justify-content: space-between;">
            <p style="font-weight: bold;">Materia Prima <span style="color: red;">*</span></p>
            <p style="width: 29%; font-weight: bold;">Cantidad <span style="color: red;">*</span></p>
        </div>
        <div style="display: flex;">
            <select class="form-control" aria-label="Default select example">
                <option selected>Selecciona una opción...</option>
                <option value="1">Cebolla</option>
                <option value="2">Tomate</option>
                <option value="3">Chile</option>
            </select>
            <input type="text" class="form-control" style="width: 40%;">
        </div>
        <div style="margin-top: 15px;">
            <button type="button" class="btn btn-success">Guardar</button>
            <button id="cancelButton" type="button" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
</div>

<script>
    const buttonAddMP = document.getElementById("add-mp");
    const mpForm = document.getElementById("mp-form");
    const cancelButton = document.getElementById("cancelButton");

    buttonAddMP.addEventListener("click", function() {
        mpForm.style.display = "block";
    })

    cancelButton.addEventListener("click", function() {
        mpForm.style.display = "none";
    })
</script>