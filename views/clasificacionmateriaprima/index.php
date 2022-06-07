<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClasificacionmateriamrimaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clasificacionmateriaprimas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clasificacionmateriaprima-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar una clasificación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_clasificacion',
            'nombre_clasificacion',
            'descripcion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clasificacionmateriaprima $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_clasificacion' => $model->id_clasificacion]);
                 }
            ],
        ],
    ]); ?>


</div>
