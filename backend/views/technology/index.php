<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TechnologySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tехника';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technology-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::a('Добавить новая техника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
	        'description',
            [
                'label' => 'Названия',
                'attribute' => 'title',
            ],

            [
                'label' => 'Картинка',
                'attribute' => 'image',
                'format' => 'raw',
                'filter' => '',
                'value' => function ($model) {
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/equipment/' . $model->image), ['width' => '100px', 'class' => 'img']);
                }
            ],
            [
                'label' => 'Ежедневная плата',
                'attribute' => 'price_date',
            ],
            [
                'label' => 'Минимальная цена',
                'attribute' => 'min_price',

            ],

            //'is_new',
//            'slug',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
