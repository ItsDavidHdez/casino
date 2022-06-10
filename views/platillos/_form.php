<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Clasificacionplatillos;
use yii\helpers\ArrayHelper;
use app\models\Unidadesmeding;
use app\models\Materiaprima;

/* @var $this yii\web\View */
/* @var $model app\models\Platillos */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="platillos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_platillo')->textInput(['maxlength' => true, 'id' => 'idPlatillo', 'placeholder' => 'Obligatorio']) ?>

    <?= $form->field($model, 'nombre_platillo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costo_produccion')->textInput(['id' => 'costo_produccion','disabled' => 'true', 'placeholder' => '$0', 'value' => 0]) ?>

    <?= $form->field($model, 'precio_venta')->textInput() ?>

    <?php
        $clasificacion2 = Clasificacionplatillos::find()->all();
        echo $form->field($model, 'id_clasifplatilo')
        ->dropDownList(
            ArrayHelper::map($clasificacion2,'id_clasifplatillo', function($clasificacion2) {
                return $clasificacion2->id_clasifplatillo.' / '.$clasificacion2->nombre_clasif;
            }),
            ['prompt'=>'Selecciona una opción...']

        );
    ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<script>
    const idPlatillo = document.getElementById("idPlatillo");
    const platillo2 = document.getElementById("platillo2");
    const buttonModal = document.getElementById("buttonModal");
    const renderIng = document.getElementById("renderIng");
    const cantidad_ingrdte = document.getElementById("cantidad_ingrdtee");
    const costo_total_ingrdte = document.getElementById("costo_total_ingrdte");
    const id_mp = document.getElementById("id_mp");
    const id_unid_med_ing = document.getElementById("id_unid_med_ing");
    const submitButtonModal = document.getElementById("submitButtonModal");
    const costo_produccion = document.getElementById("costo_produccion");
    let cantidadTotal = 0;
    let costoTotal = 0;
    let costoProduccion = 0;

    let newIng = {
            'mp': '',
            'platillo': '',
            'cantidad': '',
            'ct': '',
            'unidadMed': ''
    };

    // if(idPlatillo.value == "") {
    //     buttonModal.disabled = true;
    // } else if (idPlatillo.value !== ""){
    //     buttonModal.disabled = false;
    // }

    function handleSubmitModal() {
        if(newIng.mp === '' || newIng.platillo === '' || newIng.cantidad === '' || newIng.ct === '' || newIng.unidadMed === '') {
            console.log(false);
        } else {
            renderIng.innerHTML = Object.values(newIng);
            console.log(newIng);
        }

        costoProduccion = cantidadTotal * costoTotal;

        $("#costo_produccion").val(costoProduccion);
    }

</script>