<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Unidadesmedida;
use app\models\Clasificacionmateriaprima;

/* @var $this yii\web\View */
/* @var $model app\models\Materiaprima */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materiaprima-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_mp')->textInput(['maxlength' => true]) ?>

    <?php
        $idUnidadMedida = Unidadesmedida::find()->all();
        echo $form->field($model, 'id_uni_medida')
        ->dropDownList(
            ArrayHelper::map($idUnidadMedida, 'id_uni_medida', function($idUnidadMedida) {
                return $idUnidadMedida->id_uni_medida;
            }),
            ['prompt'=>'Selecciona una opción...']
        )
    ?>

    <?php
        $idClasificacion = Clasificacionmateriaprima::find()->all();
        echo $form->field($model, 'id_clasificacion')
        ->dropDownList(
            ArrayHelper::map($idClasificacion, 'id_clasificacion', function($idClasificacion) {
                return $idClasificacion->id_clasificacion;
            }),
            ['prompt'=>'Selecciona una opción...']
        )
    ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
