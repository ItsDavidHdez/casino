<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materiaprima */

$this->title = 'Update Materiaprima: ' . $model->id_mp;
$this->params['breadcrumbs'][] = ['label' => 'Materia prima', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mp, 'url' => ['view', 'id_mp' => $model->id_mp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materiaprima-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
