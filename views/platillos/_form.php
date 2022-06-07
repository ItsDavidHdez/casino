<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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

    <?= $form->field($model, 'id_clasifplatilo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
