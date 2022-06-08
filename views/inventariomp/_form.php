<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Materiaprima;

/* @var $this yii\web\View */
/* @var $model app\models\Inventariomp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inventariomp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $identificador = Materiaprima::find()->all();
        echo $form->field($model, 'id_mp')
        ->dropDownList(
            ArrayHelper::map($identificador,'id_mp', function($identificador){
                return $identificador->id_mp;
            }) ,
            ['prompt'=>'Selecciona una opción ...']

        );
    ?>

    <?= $form->field($model, 'existencia')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'costo_uni_medida')->textInput() ?>

    <?= $form->field($model, 'costo_uni_medida_min')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
