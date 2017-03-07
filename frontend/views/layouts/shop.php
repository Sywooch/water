<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\ltAppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
<?php $this->beginBody() ?>

    <header id="header"><!--header-->

        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="<?= Url::to(['shop/index']) ?>"><?= Html::img(Url::to('/images/logo.png'), ['alt' => '', 'class' => ''])?></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contactinfo">
                            <ul class="">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="shop-menu pull-right">
                            <?= Html::a(Yii::t('app', 'Корзина'), ['/shop/cart'], ['class' => 'btn btn-success']) ?>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><?= Html::a(Yii::t('app', 'Главная'), ['/shop/index'], ['class' => 'active']) ?></li>
                                <li><?= Html::a(Yii::t('app', 'О воде'), ['/shop/water'], ['class' => '']) ?></li>
                                <li><?= Html::a(Yii::t('app', 'Сервис'), ['/shop/production'], ['class' => '']) ?></li>
                                <li><?= Html::a(Yii::t('app', 'Доставка'), ['/shop/delivery'], ['class' => '']) ?></li>
                                <li><?= Html::a(Yii::t('app', 'Сертификаты'), ['/shop/partners'], ['class' => '']) ?></li>
                                <li><?= Html::a(Yii::t('app', 'Важно знать'), ['/shop/info'], ['class' => '']) ?></li> 
                                <li><?= Html::a(Yii::t('app', 'Вакансии'), ['/shop/job'], ['class' => '']) ?></li>
                                <li><?= Html::a(Yii::t('app', 'Контакты'), ['/shop/contacts'], ['class' => '']) ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

        <?= $content ?>

    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Акции</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Новости</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                        <a name="contact-us"></a>
                            <h2>График работы и доставки</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left"><?= date('Y') ?></p>
                    <p class="pull-right">Томская кристальная</p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
