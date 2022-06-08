<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clasificacionplatillos */

$this->title = $model->nombre_clasif;
$this->params['breadcrumbs'][] = ['label' => 'Clasificación de platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clasificacionplatillos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_clasifplatillo' => $model->id_clasifplatillo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id_clasifplatillo' => $model->id_clasifplatillo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Si elimina esta clasificación es posible que los platillos relacionados también sean eliminados',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_clasifplatillo',
            'nombre_clasif',
        ],
    ]) ?>

</div>
