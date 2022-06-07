<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inventariomp */

$this->title = 'Create Inventariomp';
$this->params['breadcrumbs'][] = ['label' => 'Inventariomps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inventariomp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
