<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductGroupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-group-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'product_group') ?>

    <?= $form->field($model, 'lf_key') ?>

    <?= $form->field($model, 'rg_key') ?>

    <?= $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'level') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
