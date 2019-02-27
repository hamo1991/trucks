<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="preloader">
    <div class="loader"></div>
</div>
<header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-5">
                    <div class="top-header-content">
                        <p>Welcome to hair salon!</p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="top-header-content text-right">
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Sat:   <?php
                            echo \frontend\widgets\info\InfoWidget::widget(['action' => 'work_time']);
                            ?></a> <span
                                    class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone"
                                                                                         aria-hidden="true"></i> Call
                            us:   <?php
                            echo \frontend\widgets\info\InfoWidget::widget(['action' => 'phone']);
                            ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="akameNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>"><img
                                src="<?= \yii\helpers\Url::to(['/']) . 'images/logo.png' ?>" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>">Home</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/transports' ?>">Transports</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/services' ?>">Services</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/about' ?>">About Us</a></li>
                                <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/contact' ?>">Contact</a></li>
                                <?php
                                if (Yii::$app->user->isGuest) {
                                    ?>
                                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/signup' ?>">Signup</a></li>
                                    <li><a href="<?= \yii\helpers\Url::to(['/']) . 'site/login' ?>">Login</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li>
                                        <form action="<?= \yii\helpers\Url::to(['/']) . 'site/logout' ?>" method="post">
                                            <input type="hidden" name="_csrf-frontend" value="wqOKrocOxVjlwA10wE3aL9happ62mB-JkYcttODH4s6o17ze3TugNJ2zNReJD69GqmvH8t_hU8ajsRzcmoKOoQ==">
                                            <button class="btn btn-link logout" name="submit" type="submit"><a id="logout">Logout
                                                    (<?= Yii::$app->user->identity->username ?>)</a>
                                            </button>


                                        </form>
                                    </li>
                                    <?php
                                }

                                ?>

                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="test">
    <?= $content ?>

</div>

<footer class="footer-area section-padding-80-0">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single-footer-widget mb-80">
                    <!-- Footer Logo -->
                    <a href="<?= \yii\helpers\Url::to(['/']) . 'site/' ?>" class="footer-logo"><img
                                src="<?= \yii\helpers\Url::to(['/']) . 'images/logo.png' ?>" alt=""></a>

                    <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur
                        sint occaecat cupidatat non proident.</p>

                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p>Copyright &copy;2019 All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i> by
                            <a href="/">Group-9 Developers</a></p>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget mb-80">
                    <!-- Widget Title -->
                    <h4 class="widget-title">Opening times</h4>

                    <!-- Open Times -->
                    <div class="open-time">
                        <p>Monday: Friday:   <?php
                            echo \frontend\widgets\info\InfoWidget::widget(['action' => 'work_time']);
                            ?></a></p>
                    </div>

                    <!-- Social Info -->
                    <div class="social-info">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-md-4 col-xl-3">
                <div class="single-footer-widget mb-80">

                    <!-- Widget Title -->
                    <h4 class="widget-title">Contact Us</h4>

                    <!-- Contact Address -->
                    <div class="contact-address">
                        <p>Tel:   <?php
                            echo \frontend\widgets\info\InfoWidget::widget(['action' => 'phone']);
                            ?></a></p>
                        <p>E-mail:   <?php
                            echo \frontend\widgets\info\InfoWidget::widget(['action' => 'email']);
                            ?></a></p>
                        <p>Address:   <?php
                            echo \frontend\widgets\info\InfoWidget::widget(['action' => 'address']);
                            ?></a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
