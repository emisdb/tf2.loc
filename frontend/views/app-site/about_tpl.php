<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id = "app">
		<h5>Контакты на {{getDate}}</h5>
        
        <ul class="contacts">
			<rec-item
			  v-for="item in recList"
			  v-bind:todo="item"
			  v-bind:key="item.id"
			></rec-item>

			<li>
			 Портфолио:
			<ul>
				<li>
				 <a href='/docs/Portfolio.pdf' target='_blank'>Скачать в формате PDF на русском</a>            </li>

			 <li>
				 <a href='/docs/Port_eng.pdf' target='_blank' >English Portfolio in PDF format</a>            </li>
			 </ul>
            </li>
        </ul>
    </div>


<?php $this->beginContent('@app/views/vues/more.php'); ?>
<?php $this->endContent(); ?>
</div>
