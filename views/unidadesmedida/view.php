<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Unidadesmedida */

$this->title = $model->nombre_uni_medida;
$this->params['breadcrumbs'][] = ['label' => 'Unidades de medida', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="unidadesmedida-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_uni_medida' => $model->id_uni_medida], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_uni_medida' => $model->id_uni_medida], [
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
            'id_uni_medida',
            'nombre_uni_medida',
            'abreviatura',
            'descripcion',
        ],
    ]) ?>

</div>
