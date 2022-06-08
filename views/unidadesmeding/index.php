<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Unidadesmeding;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UnidadesmedingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Unidades de Medida de Ingredientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadesmeding-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_unid_med_ing',
            'nombre_unid_meding',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Unidadesmeding $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_unid_med_ing' => $model->id_unid_med_ing]);
                 }
            ],
        ],
    ]); ?>


</div>
