<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Technology */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="technology-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true])->label('Названия') ?>
<!--	--><?//= $form->field($model, 'description')->textInput(['maxlength' => true])->label('Характеристика') ?>
    <?php
    if(!empty($model->image)){
        echo Html::img(\yii\helpers\Url::to('@home/images/uploads/equipment/'.$model->image),['width' => '100px','class'=>'img']);

    }
    ?>

    <?= $form->field($model, 'image')->fileInput()->label('Картинка') ?>

    <?= $form->field($model, 'price_date')->textInput()->label('Ежедневная плата') ?>

    <?= $form->field($model, 'min_price')->textInput()->label('Минимальная цена') ?>

    <?= $form->field($model, 'is_new')->dropDownList([ '0', '1', ], ['prompt' => ''])->label('Новинка') ?>

<!--    --><?//= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
