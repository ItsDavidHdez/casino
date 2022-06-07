<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inventariomp */

$this->title = 'Update Inventariomp: ' . $model->id_in;
$this->params['breadcrumbs'][] = ['label' => 'Inventariomps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_in, 'url' => ['view', 'id_in' => $model->id_in]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inventariomp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
