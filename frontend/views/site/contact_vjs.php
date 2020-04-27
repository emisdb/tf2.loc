<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Контакт';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id = "app">
 <app-nav></app-nav>
  <app-view>
    <app-sidebar>some</app-sidebar>
    <app-content> 
        <h2 v-html="mail"></h2>        
</app-content>
  </app-view>
 <input type="text" v-on:input="changeName" /> 
        <h2  v-on:mouseover="mouseOn" v-on:mouseout="mouseOut">With {{ name }}</h2>
        <h2 @click="$event.target.style.backgroundColor='purple';
             $event.target.style.color='white';">My site: <a v-bind:href="link">{{brand}}</a></h2>
    </div>


<?php $this->beginContent('@app/views/vues/contact.php'); ?>
<?php $this->endContent(); ?>
</div>
