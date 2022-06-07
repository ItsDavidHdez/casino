<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidadesmedida */

$this->title = 'Update Unidadesmedida: ' . $model->id_uni_medida;
$this->params['breadcrumbs'][] = ['label' => 'Unidadesmedidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_uni_medida, 'url' => ['view', 'id_uni_medida' => $model->id_uni_medida]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unidadesmedida-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
