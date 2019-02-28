<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ChooseusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Почему Мы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chooseus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

	        [
		        'attribute' => 'title',
		        'format' => 'raw',
		        'filter'=> '',
		        'value' => function($model){
			        return $model->title;
		        }
	        ] ,



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
            //'reasonfour',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
