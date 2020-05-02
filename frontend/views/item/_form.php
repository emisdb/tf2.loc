<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

 	<div class="form-group">
	  <?= $form->field($model, 'id')->textInput() ?>
	</div>

	<div class="form-group">
		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="form-group">
		<?= $form->field($model, 'short_name')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="form-group">
		<?= $form->field($model, 'okei')->textInput(['maxlength' => true]) ?>
	</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
