<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language = 'es-ES' ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Platillos', 'items' => [
                ['label' => 'Seguimiento de Platillos', 'url' => ['platillos/index']],
                ['label' => 'Clasificación de Platillos', 'url' => ['clasificacionplatillos/index']],
                ['label' => 'Ingredientes', 'url' => ['ingredientesplatillo/index']],
            ]],
            ['label' => 'Materia Prima', 'items' => [
                ['label' => 'Materia prima', 'url' => ['materiaprima/index']],
                ['label' => 'Inventario materia prima', 'url' => ['inventariomp/index']],
                ['label' => 'Clasificación materia prima', 'url' => ['clasificacionmateriaprima/index']],
            ]],
            ['label' => 'Unidades de Medida', 'items' => [
                ['label' => 'Unidades de Medida', 'url' => ['unidadesmedida/index']],
                ['label' => 'Unidades de Medida Ingredientes', 'url' => ['unidadesmeding/index']],
            ]],
        ],
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Club Petrolero <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
