<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacionmateriaprima */

$this->title = $model->id_clasificacion;
$this->params['breadcrumbs'][] = ['label' => 'Clasificacionmateriaprimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clasificacionmateriaprima-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_clasificacion' => $model->id_clasificacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_clasificacion' => $model->id_clasificacion], [
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
            'id_clasificacion',
            'nombre_clasificacion',
            'descripcion',
        ],
    ]) ?>

</div>
