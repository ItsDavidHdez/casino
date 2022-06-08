<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Unidadesmeding;
use app\models\Platillos;
use app\models\Materiaprima;

/* @var $this yii\web\View */
/* @var $model app\models\Ingredientesplatillo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ingredientesplatillo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $idMateriaPrima = Materiaprima::find()->all();
        echo $form->field($model, 'id_mp')
        ->dropDownList(
            ArrayHelper::map($idMateriaPrima, 'id_mp', function($idMateriaPrima) {
                return $idMateriaPrima->id_mp.' / '.$idMateriaPrima->nombre_mp;
            }),
            ['prompt'=>'Selecciona un platillo...']
        )
    ?>

    <?php
        $idPlatillo = Platillos::find()->all();
        echo $form->field($model, 'id_platillo')
        ->dropDownList(
            ArrayHelper::map($idPlatillo, 'id_platillo', function($idPlatillo) {
                return $idPlatillo->id_platillo.' / '.$idPlatillo->nombre_platillo;
            }),
            ['prompt'=>'Selecciona un platillo...']
        )
    ?>

    <?= $form->field($model, 'cantidad_ingrdte')->textInput() ?>

    <?= $form->field($model, 'costo_total_ingrdte')->textInput() ?>

    <?php
        $idUniMed = Unidadesmeding::find()->all();
        echo $form->field($model, 'id_unid_med_ing')
        ->dropDownList(
            ArrayHelper::map($idUniMed,'id_unid_med_ing', function($idUniMed) {
                return $idUniMed->id_unid_med_ing.' / '.$idUniMed->nombre_unid_meding;
            }),
            ['prompt'=>'Selecciona una unidad de medida...']
        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
