<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidadesmeding */

$this->title = 'Update Unidadesmeding: ' . $model->id_unid_med_ing;
$this->params['breadcrumbs'][] = ['label' => 'Unidades de medida de ingredientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_unid_med_ing, 'url' => ['view', 'id_unid_med_ing' => $model->id_unid_med_ing]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidadesmeding-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
