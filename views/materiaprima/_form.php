<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materiaprima */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materiaprima-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_mp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_uni_medida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_clasificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
