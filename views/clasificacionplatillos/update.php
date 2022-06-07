<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacionplatillos */

$this->title = 'Update Clasificacion platillos: ' . $model->id_clasifplatillo;
$this->params['breadcrumbs'][] = ['label' => 'Clasificación de platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_clasifplatillo, 'url' => ['view', 'id_clasifplatillo' => $model->id_clasifplatillo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clasificacionplatillos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
