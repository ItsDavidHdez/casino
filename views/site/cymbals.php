<?php

use yii\helpers\Html;


?>

<div class="container">
    <h1>Platillos</h1>
    <div style="margin-top: 30px;">
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Identificador de Platillo</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Nombre del Platillo</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Descripción</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Costo de producción</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Precio de Venta</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="inputPassword" placeholder="$$$" >
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Clasificación de platillos</label>
                <div class="col-sm-8">
                    <select class="custom-select">
                        <option selected>Selecciona una opción...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
            <div style="margin-top: 40px; display: flex; justify-content: end;">
                <button type="button" class="btn col-sm-2 btn-primary" style="margin-right: 20px;" data-toggle="modal" data-target="#exampleModalCenter">Agregar ingrediente</button>
                <button type="button" class="btn col-sm-2 btn-success">Terminar</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar ingrediente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Ingrediente</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Cantidad</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Costo total de ingrediente</label>
                <div class="col-sm-8">
                    <p>$0</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn col-sm-4 btn-success">Agregar</button>
      </div>
    </div>
  </div>
</div>