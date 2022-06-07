<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InventariompSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventariomp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_in') ?>

    <?= $form->field($model, 'id_mp') ?>

    <?= $form->field($model, 'existencia') ?>

    <?= $form->field($model, 'stock') ?>

    <?= $form->field($model, 'costo_uni_medida') ?>

    <?php // echo $form->field($model, 'costo_uni_medida_min') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
