<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Materiaprima */

$this->title = 'Crear materia prima';
$this->params['breadcrumbs'][] = ['label' => 'Materia prima', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materiaprima-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
