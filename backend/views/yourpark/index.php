<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\YourparkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сипучие материяли';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yourpark-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Yourpark', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

	        [
		        'attribute' => 'background',
		        'format' => 'raw',
		        'filter' => '',
		        'value' => function($model){
			        return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/yourpark/'. $model->background),['width' => '120px','height' => '80px',]);
		        }
	        ] ,
            'title',
            'description',
	        [
		        'attribute' => 'img',
		        'format' => 'raw',
		        'filter' => '',
		        'value' => function($model){
			        return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/yourpark/'. $model->img),['width' => '120px','height' => '80px',]);
		        }
	        ] ,
            //'text',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
