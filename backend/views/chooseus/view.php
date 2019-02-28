<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Chooseus */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Chooseuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="chooseus-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'filter'=> '',
                'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/chuseus/'. $model->image),['width' => '120px','height' => '80px',]);
                }
            ] ,
            'reasonone',
            'reasontwo',
            'reasonthree',
            'reasonfour',
        ],
    ]) ?>

</div>
