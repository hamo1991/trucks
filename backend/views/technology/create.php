<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Technology */

$this->title = 'Добавить новую технику';
$this->params['breadcrumbs'][] = ['label' => 'Техника', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technology-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
