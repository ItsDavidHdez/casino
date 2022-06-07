<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IngredientesplatilloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ingredientesplatillos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ingredientesplatillo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ingredientesplatillo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ingrdte_platillo',
            'id_mp',
            'id_platillo',
            'cantidad_ingrdte',
            'costo_total_ingrdte',
            //'id_unid_med_ing',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Ingredientesplatillo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_ingrdte_platillo' => $model->id_ingrdte_platillo]);
                 }
            ],
        ],
    ]); ?>


</div>
