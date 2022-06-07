<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inventariomp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventariomp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'existencia')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'costo_uni_medida')->textInput() ?>

    <?= $form->field($model, 'costo_uni_medida_min')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
