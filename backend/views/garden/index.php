<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\GardenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Дворы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="garden-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить двор', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'content',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'filter' => '',
                'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/garden/'. $model->image),['width' => '120px','height' => '80px',]);
                }
            ] ,

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
