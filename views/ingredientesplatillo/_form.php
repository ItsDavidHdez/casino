<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ingredientesplatillo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingredientesplatillo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_platillo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cantidad_ingrdte')->textInput() ?>

    <?= $form->field($model, 'costo_total_ingrdte')->textInput() ?>

    <?= $form->field($model, 'id_unid_med_ing')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
