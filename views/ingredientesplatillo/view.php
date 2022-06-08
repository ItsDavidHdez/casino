<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ingredientesplatillo */

$this->title = $model->id_ingrdte_platillo;
$this->params['breadcrumbs'][] = ['label' => 'Ingredientes de platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ingredientesplatillo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_ingrdte_platillo' => $model->id_ingrdte_platillo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_ingrdte_platillo' => $model->id_ingrdte_platillo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ingrdte_platillo',
            'id_mp',
            'id_platillo',
            'cantidad_ingrdte',
            'costo_total_ingrdte',
            'id_unid_med_ing',
        ],
    ]) ?>

</div>
