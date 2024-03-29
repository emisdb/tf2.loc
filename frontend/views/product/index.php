<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
			[
				'attribute' => 'product_group',
				'value' => function ($data) {
				return $data->productGroup->name;}
			],
			[
				'attribute' => 'item',				
				'value' => function ($data) {
					return $data->items->short_name;}
				],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
