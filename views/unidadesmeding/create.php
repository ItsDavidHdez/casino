<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Unidadesmeding */

$this->title = 'Crear unidad de medida de ingredientes';
$this->params['breadcrumbs'][] = ['label' => 'Unidadesmedings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadesmeding-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
