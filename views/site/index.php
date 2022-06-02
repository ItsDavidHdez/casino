<?php

/** @var yii\web\View $this */


$this->title = 'Casino';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Club Petrolero Cerro Azul</h1>
        <p class="lead">Sistema Integral Club Petrolero</p>
    </div>

    <div class="body-content">

        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner4.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner5.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner6.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?= Yii::$app->request->baseUrl?>/images/Banner7.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>

    </div>
</div>
