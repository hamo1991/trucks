<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">Trucks</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"><?= \backend\widgets\email\EmailWidget::widget(['count' => 'count']);?></span>
                    </a>
                    <?= \backend\widgets\email\EmailWidget::widget();?>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= \yii\helpers\Url::to(['/images/avatar5.png']) ?>" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">Админ</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= \yii\helpers\Url::to(['/images/avatar5.png']) ?>" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                Group-9 - Web Developers</p>
                        </li>

                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="/" class="btn btn-default btn-flat">Перейти на сайт</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Выход',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
