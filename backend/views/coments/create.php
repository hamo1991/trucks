<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Coments */

$this->title = 'Создать Коментарию ';
$this->params['breadcrumbs'][] = ['label' => 'Коментарии', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coments-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
