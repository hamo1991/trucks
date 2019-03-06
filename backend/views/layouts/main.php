<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <link rel="apple-touch-icon" sizes="57x57" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-57x57.png'])?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-60x60.png'])?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-72x72.png'])?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-76x76.png'])?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-114x114.png'])?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-120x120.png'])?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-144x144.png'])?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-152x152.png'])?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-57x57.png'])?>">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?= \yii\helpers\Url::to(['/images/icon/apple-icon-180x180.png'])?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= \yii\helpers\Url::to(['/images/icon/favicon-32x32.png'])?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= \yii\helpers\Url::to(['/images/icon/favicon-96x96.png'])?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= \yii\helpers\Url::to(['/images/icon/favicon-16x16.png'])?>">
        <link rel="manifest" href="<?= \yii\helpers\Url::to(['/images/icon/manifest.json'])?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title>Trucks</title>
        <?php $this->head() ?>
    </head>
    <body class="<?= \dmstr\helpers\AdminLteHelper::skinClass() ?>">
    <?php $this->beginBody() ?>
    <?php if (!Yii::$app->user->isGuest){
        ?>
        <div class="wrapper">

            <?= $this->render(
                'header.php',
                ['directoryAsset' => $directoryAsset]
            ) ?>

            <?= $this->render(
                'left.php',
                ['directoryAsset' => $directoryAsset]
            )
            ?>

            <?= $this->render(
                'content.php',
                ['content' => $content, 'directoryAsset' => $directoryAsset]
            ) ?>

        </div>
    <?php
    }else{
        ?>
        <img class="error_backend" src="<?= \yii\helpers\Url::to('/backend/web/images/images.png')?>" alt="Error">
    <?php
    }?>


    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
