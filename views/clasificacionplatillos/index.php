<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\clasificacionplatillos;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClasificacionplatillosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clasificación de Platillos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clasificacionplatillos-index">

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

            'id_clasifplatillo',
            'nombre_clasif',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clasificacionplatillos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_clasifplatillo' => $model->id_clasifplatillo]);
                 }
            ],
        ],
    ]); ?>


</div>
