<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ServiceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
	        [
		        'attribute' => 'image',
		        'format' => 'raw',
		        'filter'=> '',
		        'value' => function($model){
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/all/'. $model->image),['width' => '120px','height' => '80px',]);
		        }
	        ] ,
            'slug',
            'is_new',
            //'title',
            //'description:ntext',
            //'content:ntext',
            //'price',

            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view}{update} {delete}'
                ],

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
