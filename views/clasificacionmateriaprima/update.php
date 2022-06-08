<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacionmateriaprima */

$this->title = 'Update Clasificacionmateriaprima: ' . $model->id_clasificacion;
$this->params['breadcrumbs'][] = ['label' => 'Clasificación de materia prima', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_clasificacion, 'url' => ['view', 'id_clasificacion' => $model->id_clasificacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clasificacionmateriaprima-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
