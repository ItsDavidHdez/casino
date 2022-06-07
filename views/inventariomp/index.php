<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InventariompSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inventariomps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventariomp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Inventariomp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_in',
            'id_mp',
            'existencia',
            'stock',
            'costo_uni_medida',
            //'costo_uni_medida_min',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Inventariomp $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_in' => $model->id_in]);
                 }
            ],
        ],
    ]); ?>


</div>
