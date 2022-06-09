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

    <?= $form->field($model, 'costo_produccion')->textInput(['id' => 'costo_produccion','disabled' => 'true', 'placeholder' => '$0']) ?>

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
        <?= Html::button('Agregar ingrediente', ['class' => 'btn col-sm-2 btn-primary', 'type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#exampleModalCenter', 'style' => 'margin-left: 10px;', 'id' => 'buttonModal']) ?>
    </div>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar ingrediente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?php
                                $idMateriaPrima = Materiaprima::find()->all();
                                echo $form->field($modelIng, 'id_mp')
                                ->dropDownList(
                                    ArrayHelper::map($idMateriaPrima, 'id_mp', function($idMateriaPrima) {
                                        return $idMateriaPrima->id_mp.' / '.$idMateriaPrima->nombre_mp;
                                    }),
                                    ['prompt'=>'Selecciona un platillo...', 'id' => 'id_mp']
                                )
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?= $form->field($modelIng, 'id_platillo')->textInput(['id' => 'platillo2', 'disabled' => 'true']) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?= $form->field($modelIng, 'cantidad_ingrdte')->textInput(['id' => 'cantidad_ingrdtee']) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?= $form->field($modelIng, 'costo_total_ingrdte')->textInput(['id' => 'costo_total_ingrdte']) ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <?php
                                $idUniMed = Unidadesmeding::find()->all();
                                echo $form->field($modelIng, 'id_unid_med_ing')
                                ->dropDownList(
                                    ArrayHelper::map($idUniMed,'id_unid_med_ing', function($idUniMed) {
                                        return $idUniMed->id_unid_med_ing.' / '.$idUniMed->nombre_unid_meding;
                                    }),
                                    ['prompt'=>'Selecciona una unidad de medida...', 'id' => 'id_unid_med_ing']
                                );
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="submitButtonModal" type="submit" class="btn col-sm-4 btn-success" data-dismiss="modal" onclick="handleSubmitModal();">Agregar</button>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

    <p>Ingredientes:</p>
    <p id="renderIng">Aún sin ingredientes</p>

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

    idPlatillo.addEventListener("change", function(e) {
        platillo2.innerHTML = e.target.value;
        $("#platillo2").val(e.target.value);
        newIng.platillo = e.target.value;
    });

    // if(idPlatillo.value == "") {
    //     buttonModal.disabled = true;
    // } else if (idPlatillo.value !== ""){
    //     buttonModal.disabled = false;
    // }

    cantidad_ingrdte.addEventListener("change", function(e) {
        newIng.cantidad = e.target.value;
    });
    
    costo_total_ingrdte.addEventListener("change", function(e) {
        newIng.ct = e.target.value;
    });
    
    id_mp.addEventListener("change", function(e) {
        newIng.mp = e.target.value;
    });

    id_unid_med_ing.addEventListener("change", function(e) {
        newIng.unidadMed = e.target.value;
    });

    cantidad_ingrdtee.addEventListener("change", function(e) {
        cantidadTotal = e.target.value;
    });

    costo_total_ingrdte.addEventListener("change", function(e) {
        costoTotal = e.target.value;
    });

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