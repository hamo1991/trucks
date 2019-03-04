<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Chooseus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chooseus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reasonone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reasontwo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reasonthree')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reasonfour')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
