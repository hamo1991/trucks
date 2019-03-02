<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Technology */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="technology-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалять', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
                    return Html::img(\yii\helpers\Url::to('/frontend/web/images/uploads/all/' . $model->image), ['width' => '100px', 'class' => 'img']);
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
            [
                'label' => 'Новинка',
                'attribute' => 'is_new',
            ],
            [
                'label' => 'URL',
                'attribute' => 'slug',
            ],
            'content',
            'description',

        ],
    ]) ?>

</div>
