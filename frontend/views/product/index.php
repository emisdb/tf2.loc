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

            'ckey',
            'tnam',
			['value' => function ($data) {
			return $data->cgrs->tnam;}
			],
			['value' => function ($data) {
			return $data->its->sh_name;}
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
