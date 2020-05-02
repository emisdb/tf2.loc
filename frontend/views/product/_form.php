<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\ProductGroup;
use frontend\models\Item;


/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>
	<div class="form-group">
		<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
	</div>
	<div class="form-group">
		<?= $form->field($model, 'product_group')->dropDownList(ArrayHelper::map(ProductGroup::find()->asArray()->select(['id','name'])->all(),'id','name')) ?>
	</div>
	<div class="form-group">
		<?= $form->field($model, 'item')->dropDownList(ArrayHelper::map(Item::find()->asArray()->select(['id','name'])->all(),'id','name')) ?>
	</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
