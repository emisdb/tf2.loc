<?php
		$this->registerJsFile('https://unpkg.com/vue', ['position' => \yii\web\View::POS_END]);
		$pg=new frontend\models\ProductGroup;	$pgjson=$pg->getJSON(); 
		//					<div :style = "{margin-left: product.level * 5 + 'px'}">{{product.name}}<div>


?>
<?php  $this->registerCSS(<<<CSS
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -6px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}

.dropdown-submenu>a:after {
  display: block;
  content: " ";
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
CSS
); ?>
	
	<?php  $this->registerJs(<<<JS
        new Vue({
        el:'#app',
        data:{
			rows:[],
			margin:15,
			products:
			$pgjson,
        }
    })
JS
); ?>


