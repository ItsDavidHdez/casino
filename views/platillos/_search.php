<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlatillosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="platillos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_platillo') ?>

    <?= $form->field($model, 'nombre_platillo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'costo_produccion') ?>

    <?= $form->field($model, 'precio_venta') ?>

    <?php // echo $form->field($model, 'id_clasifplatilo') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
