<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ingredientesplatillo */

$this->title = 'Update Ingredientesplatillo: ' . $model->id_ingrdte_platillo;
$this->params['breadcrumbs'][] = ['label' => 'Ingredientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ingrdte_platillo, 'url' => ['view', 'id_ingrdte_platillo' => $model->id_ingrdte_platillo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ingredientesplatillo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
