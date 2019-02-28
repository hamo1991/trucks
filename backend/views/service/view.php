<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Service */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="service-view">

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
            'id',
            'tech_id',
	        [
		        'attribute' => 'image',
		        'format' => 'raw',
		        'filter'=> '',
		        'value' => function($model){
			        return Html::img(\yii\helpers\Url::to('@image/'.$model->image),['width'=>'150px','height'=>'150px',]);
		        }
	        ] ,
            'slug',
            'is_new',
            'title',
            'description:ntext',
            'price',
        ],
    ]) ?>

</div>
