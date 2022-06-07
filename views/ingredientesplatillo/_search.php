<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IngredientesplatilloSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingredientesplatillo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ingrdte_platillo') ?>

    <?= $form->field($model, 'id_mp') ?>

    <?= $form->field($model, 'id_platillo') ?>

    <?= $form->field($model, 'cantidad_ingrdte') ?>

    <?= $form->field($model, 'costo_total_ingrdte') ?>

    <?php // echo $form->field($model, 'id_unid_med_ing') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
