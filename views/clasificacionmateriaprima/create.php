<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacionmateriaprima */

$this->title = 'Create Clasificacionmateriaprima';
$this->params['breadcrumbs'][] = ['label' => 'Clasificacionmateriaprimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clasificacionmateriaprima-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
