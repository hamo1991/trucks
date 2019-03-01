<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Chooseus */

$this->title = 'Create Chooseus';
$this->params['breadcrumbs'][] = ['label' => 'Chooseuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chooseus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>