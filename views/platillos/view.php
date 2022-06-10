<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Ingredientesplatillo;
use yii\grid\ActionColumn;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Platillos */

$this->title = $model->nombre_platillo;
$this->params['breadcrumbs'][] = ['label' => 'Platillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$modelIng = new Ingredientesplatillo();

?>
<div class="platillos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id_platillo' => $model->id_platillo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id_platillo' => $model->id_platillo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de eliminar este platillo?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Agregar ingrediente', ['ingredientesplatillo/create', 'id_ingrdte_platillo' => $modelIng->id_ingrdte_platillo], ['class' => 'btn btn-warning']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_platillo',
            'nombre_platillo',
            'descripcion',
            'costo_produccion',
            'precio_venta',
            'id_clasifplatilo',
            'image',
        ],
    ]) ?>

<?= GridView::widget([
        'dataProvider' => $dataProviderIng,
        'filterModel' => $searchModelIng,
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
                'urlCreator' => function ($action, Ingredientesplatillo $modelIng, $key, $index, $column) {
                    return Url::toRoute(['ingredientesplatillo/'.$action, 'id_ingrdte_platillo' => $modelIng->id_ingrdte_platillo]);
                 }
            ],
        ],
    ]); ?>


</div>
