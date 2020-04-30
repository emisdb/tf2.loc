<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tnam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cgr')->textInput() ?>

    <?= $form->field($model, 'lf_key')->textInput() ?>

    <?= $form->field($model, 'rg_key')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
