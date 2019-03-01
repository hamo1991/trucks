<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Yourpark */

$this->title = 'Сипучие материяли';
$this->params['breadcrumbs'][] = ['label' => 'Yourparks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yourpark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
