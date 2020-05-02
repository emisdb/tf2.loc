<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'TESTS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div id = "app">
		<app-nav
		  v-bind:items="menu"
		></app-nav>
		<app-view>
			<app-sidebar></app-sidebar>
			<app-content> 
				<h2 v-html="mail"></h2>        
			</app-content>
		 </app-view>
		<input type="text" v-on:input="changeName" /> 
        <h2  v-on:mouseover="mouseOn" v-on:mouseout="mouseOut">With {{ name }}</h2>
        <h2 @click="$event.target.style.backgroundColor='purple';
             $event.target.style.color='white';">My site: <a v-bind:href="link">{{brand}}</a></h2>
		<article>
		<figure-item
			  v-for="it in places"
			  v-bind:item="it"
			></figure-item>
	
	 </article>
    </div>
	
<dl class="articles" style="clear: both;">
    <dt>02.10.05</dt>
    <dd>новость 3</dd>
    <dd>новость 2</dd>
    <dt>01.10.05</dt>
    <dd>новость 1</dd>
</dl>

	<script type="text/x-template" id="v-figure">
		<figure>
			<p><img :src="item.url" :alt="item.title" :title="item.title"></p>
			<figcaption>{{item.title}}</figcaption>
		</figure>	
	</script>
	<script type="text/x-template" id="v-nav">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			   <a class="navbar-brand" href="#">WebSiteName</a>
			 </div>
		    <ul class="nav navbar-nav">
			  <li  v-for="(it, index) in items" :class="{active : index == 1}"><a href="#">{{it.title}}</a></li>
			</ul>
			</div>
		</nav>
	</script>
	
<?php $this->beginContent('@app/views/vues/test.php'); ?>
<?php $this->endContent(); ?>
</div>
