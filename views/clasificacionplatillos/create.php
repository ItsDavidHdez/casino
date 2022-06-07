<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacionplatillos */

$this->title = 'Agregar clasificación de platillos';
$this->params['breadcrumbs'][] = ['label' => 'Clasificación de Platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clasificacionplatillos-create">

    <h1 style="margin-bottom: 20px;"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
