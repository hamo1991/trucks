<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ChooseusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chooseus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

	<?= $form->field($model, 'image') ?>

    <?= $form->field($model, 'reasonone') ?>

    <?= $form->field($model, 'reasontwo') ?>

    <?= $form->field($model, 'reasonthree') ?>

    <?php // echo $form->field($model, 'reasonfour') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
