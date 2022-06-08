<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Clasificacionplatillos;
use yii\helpers\ArrayHelper;
use app\models\Ingredientesplatillo;

/* @var $this yii\web\View */
/* @var $model app\models\Platillos */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="platillos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_platillo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombre_platillo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo_produccion')->textInput() ?>

    <?= $form->field($model, 'precio_venta')->textInput() ?>

    <?=
        $form->field($model, 'id_clasifplatilo')
        ->dropDownList(
            ArrayHelper::map(Clasificacionplatillos::find()->all(), 'id_clasifplatilo', 'nombre_clasif'),
            ['prompt' => 'Selecciona una opción...']
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
