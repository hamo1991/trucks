<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pictures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pictures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'technology_id')->textInput() ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
