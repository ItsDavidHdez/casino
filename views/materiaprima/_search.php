<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MateriaprimaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materiaprima-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mp') ?>

    <?= $form->field($model, 'nombre_mp') ?>

    <?= $form->field($model, 'id_uni_medida') ?>

    <?= $form->field($model, 'id_clasificacion') ?>

    <?= $form->field($model, 'descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
