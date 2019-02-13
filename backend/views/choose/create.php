<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ChooseUs */

$this->title = 'Create Choose Us';
$this->params['breadcrumbs'][] = ['label' => 'Choose uses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="choose-us-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
