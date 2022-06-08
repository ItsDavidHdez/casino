<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Clasificacionplatillos;
use yii\helpers\ArrayHelper;
use app\models\Ingredientesplatillo;

/* @var $this yii\web\View */
/* @var $model app\models\Platillos */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="platillos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_platillo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_platillo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo_produccion')->textInput() ?>

    <?= $form->field($model, 'precio_venta')->textInput() ?>

    <?php
        $clasificacion2 = Clasificacionplatillos::find()->all();
        echo $form->field($model, 'id_clasifplatilo')
        ->dropDownList(
            ArrayHelper::map($clasificacion2,'id_clasifplatillo', function($clasificacion2) {
                return $clasificacion2->id_clasifplatillo.' / '.$clasificacion2->nombre_clasif;
            }),
            ['prompt'=>'Selecciona una opción...']

        );
    ?>
    <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Cantidad</label>
                        <div class="col-sm-8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Cantidad</label>
                        <div class="col-sm-8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Cantidad</label>
                        <div class="col-sm-8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-4 col-form-label">Cantidad</label>
                        <div class="col-sm-8">
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
    </div> -->

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
        <?= Html::button('Agregar ingrediente', ['class' => 'btn col-sm-2 btn-primary', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#exampleModalCenter', 'style' => 'margin-left: 10px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
