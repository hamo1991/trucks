<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Chooseus */

$this->title = 'Update Chooseus: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Chooseuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chooseus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
